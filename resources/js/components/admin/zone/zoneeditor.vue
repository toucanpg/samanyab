<template>
    <div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        لیست استان ها
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" v-for="(item,key) in liststate" v-on:click="callcity(key)"
                            v-text="item.name"></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        لیست شهر ها
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" v-for="(item,key) in listcities" v-on:click="callzone(key)"
                            v-text="item.name"></li>

                    </ul>
                </div>

            </div>
            <div class="col-md-4">
                <template v-if="data.city!=null">
                    <form @submit.prevent="SaveTotallCity">
                        <div class="form-group">
                            <label v-text="$lang.admin.zone"></label>
                            <label v-text="data.namezone"></label>
                            <input v-model="location" class="form-control" id="email">
                        </div>

                        <button type="submit" class="btn btn-primary" v-text="$lang.admin.Add"></button>
                    </form>
                    <error :error="error"></error>
                    <hr>

                    <div class="card">
                        <div class="card-header" v-text="$lang.admin.List+' '+$lang.admin.zone+' '+data.namezone">
                            لیست شهر ها
                        </div>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item" v-for="item in listzone" :key="item.id" >{{item.name}}
                                <div class="float-left">
                                    <i v-on:click="editzone(item.id)" class="fa fa-edit fa-2x" ></i>
                                    <i  v-on:click="removezone(item.id)" >
                                        <span class="fa fa-trash fa-2x"></span>
                                    </i>
                                </div>

                            </li>

                        </ul>
                    </div>

                </template>
            </div>
        </div>
    </div>
</template>

<script>
    import json from './Province'

    export default {
        name: "zoneeditor",
        data: function () {
            return {
                liststate: json,
                listcities: [],
                location: null,
                error: [],
                listzone: [],
                data: {
                    statename: null,
                    state: null,
                    city: null,
                    zone: null,
                    namezone: null,


                }
            }
        },
        methods: {
            listcity() {

            },
            callzone(id) {
                this.data.city = id;
                this.data.namezone = this.liststate[this.data.state].Cities[id].name;
                this.reloadzone();
            },
            callcity(id) {

                this.data.state = id;
                this.data.statename = this.liststate[id].name;
                this.listcities = this.liststate[id].Cities;


            },
            SaveTotallCity() {
                let that = this;
                let data = {
                    state: this.data.statename,
                    city: this.data.namezone,
                    zone: this.location,

                };
                console.log(data);
                axios.post('/Dashborad/zone', data)
                    .then(function (response) {
                        console.log(response.data.data);
                    })
                    .catch((error) => {
                        that.error = error.response.data.errors;
                    });
            },
            reloadzone() {
                let that = this;
                let data = {
                    state: this.data.statename,
                    city: this.data.namezone,

                };
                axios.post('/Dashborad/zone/LoadTotalZone', data)
                    .then(function (response) {
                        that.listzone = response.data.data;

                    });
            },
            removezone(id) {
                let that = this;

                axios.delete('/Dashborad/zone/'+id)
                    .then(function (response) {
                        that.reloadzone();
                    });
            },

        },
        mounted() {
            this.listcity();

        }
    }
</script>

<style scoped>

</style>
