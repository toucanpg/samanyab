<?php

namespace App\Http\Controllers\Admin\Zone;

use App\Http\Resources\ZoneResourse;
use App\Model\StateModel\Z_city;
use App\Model\StateModel\Z_state;
use App\Model\StateModel\Z_zone;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Self_;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard', array('component' => 'zoneeditor'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Z_state $z_state, Z_city $z_city, Z_zone $z_zone)
    {
        $request->validate([
            'zone' => ['required', function ($attribute, $value, $fail) use ($request, $z_zone, $z_state, $z_city) {
                if ($z_state->where('name', $request->state)->count() == 0) {
                    $save = new $z_state;
                    $save->name = $request->state;
                    $save->save();
                    $state = $save->id;
                } else {
                    $state = $z_state->where('name', $request->state)->first()->id;
                }
                $checkcity = $z_city->where('name', $request->city)->whereHas('toState', function (Builder $query) use ($state) {
                    $query->where('state', $state);
                })->first();
                if ($checkcity == null) {
                    $save = new $z_city;
                    $save->name = $request->city;
                    $save->save();
                    $save->toState()->sync($state);
                    $city = $save->id;
                } else {
                    $city = $checkcity->id;
                }
                $checkcity = $z_zone->where('name', $request->zone)->whereHas('tocity', function (Builder $query) use ($city) {
                    $query->where('city', $city);
                })->count();
                if ($checkcity != 0) {
                    return $fail(__('web.Duplicate Zone'));
                }
                $save = new $z_zone;
                $save->name = $request->zone;
                $save->save();
                $save->toCity()->sync($city);
                //return self::loadZone($city);

            }

            ]
        ]);
        $state = $z_state->where('name', $request->state)->first()->id;

        $checkcity = $z_city->where('name', $request->city)->whereHas('toState', function (Builder $query) use ($state) {
            $query->where('state', $state);
        })->first();
        return self::loadZone($checkcity->id);


    }

    function LoadTotalZone(Request $request)
    {
        $state=Z_state::where('name',$request->state)->first()->id;
        $checkcity = Z_city::where('name', $request->city)->whereHas('toState', function (Builder $query) use ($state) {
            $query->where('state', $state);
        })->first();
        if($checkcity==null){
            return;
        }
        return self::loadZone($checkcity->id);
    }

    function loadZone($city)
    {

        $zone = Z_zone::whereHas('toCity', function (Builder $query) use ($city) {
            $query->where('city', $city);
        })->with('toCity.toState')->get();

        return ZoneResourse::collection($zone);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $zone=Z_zone::where('id',$id)->with('toCity')->first();
        $city=$zone->toCity()->first()->id;

        $zone->toCity()->detach($city);
        $zone->delete();
             $zone=Z_city::where('id',$city)->with('toZone')->first()->toZone()->count();
                if($zone==0){
                    $city=Z_city::where('id',$city)->first();
                    $state=$city->toState()->first()->id;

                    $city->toState()->detach($state);

                    $city->delete();

                    $zones=Z_state::where('id',$state)->with('toCity')->first()->toCity()->count();
                    if($zones==0){
                        Z_state::where('id',$state)->first()->delete();
                    }


                    }



    }
}
