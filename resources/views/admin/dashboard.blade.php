<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ @$title }} </title>
    <link href='/css/admin.css' rel='stylesheet' type='text/css'>

</head>

<body data-ma-theme="green">

<main class="main" id="app">

    <div class="page-loader">
        <div class="page-loader__spinner">
            <svg viewBox="25 25 50 50">
                <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

    <header class="header">
        <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
            <div class="navigation-trigger__inner">
                <i class="navigation-trigger__line"></i>
                <i class="navigation-trigger__line"></i>
                <i class="navigation-trigger__line"></i>
            </div>
        </div>

        <div class="header__logo hidden-sm-down" class="text-right">
            <h1><a href="/Dashboard" >تیس 4 </a></h1>
        </div>

        <form class="search">
            <div class="search__inner">
                <input type="text" class="search__text" placeholder="متن یا عبارت خود را برای جستجو وارد نمایید">
                <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
            </div>
        </form>

        <ul class="top-nav">
            <li class="hidden-xl-up"><a href="default.htm" data-ma-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

            <li class="dropdown">
                <a href="default.htm" data-toggle="dropdown"><i class="zmdi zmdi-email"></i></a>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu--block">
                    <div class="listview listview--hover">
                        <div class="listview__header">
                            پیام ها

                            <div class="actions">
                                <a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
                            </div>
                        </div>

                        <a href="default.htm" class="listview__item">
                            <img src="/templateadmin/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    علی احمدی<small>12:01 بعد از ظهر</small>
                                </div>
                                <p>تقدیر اجتماعی است که به طور مستقل و ماتریس می شود</p>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <img src="/templateadmin/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    حسین حسینی
                                    <small>02:45 بعد از ظهر</small>
                                </div>
                                <p>  قطر اما در حال حاضر عنصر درد، و یا آن را زشت</p>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <img src="/templateadmin/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    اکبر اکبری
                                    <small>08:21 بعد از ظهر</small>
                                </div>
                                <p>یک قایق قبل و در اندوه فوتبال در آسانسور از پول و یا تبلیغات   نشستن</p>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <img src="/templateadmin/demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    محمد محمدی
                                    <small>08:43 بعد از ظهر</small>
                                </div>
                                <p>برای برای من آنجا بزرگترین زندگی است، اما در حال حاضر بسیاری این هست ارزش گوجه فرنگی دشوار</p>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <img src="/templateadmin/demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                            <div class="listview__content">
                                <div class="listview__heading">
                                    رضا رضایی
                                    <small>11:32 بعد از ظهر</small>
                                </div>
                                <p>من راحتی مایکروویو بادام زمینی به گلو می شود. زمانی که ممکن است محفوظ است، حتی قبل از تامین مالی املاک و مستغلات</p>
                            </div>
                        </a>

                        <a href="default.htm" class="view-more">مشاهده تمام پیام ها</a>
                    </div>
                </div>
            </li>

            <li class="dropdown top-nav__notifications">
                <a href="default.htm" data-toggle="dropdown" class="top-nav__notify">
                    <i class="zmdi zmdi-notifications"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu--block">
                    <div class="listview listview--hover">
                        <div class="listview__header">
                            اطلاعیه

                            <div class="actions">
                                <a href="default.htm" class="actions__item zmdi zmdi-check-all" data-ma-action="notifications-clear"></a>
                            </div>
                        </div>

                        <div class="listview__scroll scrollbar-inner">
                            <a href="default.htm" class="listview__item">
                                <img src="/templateadmin/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">David Belle</div>
                                    <p>تقدیر اجتماعی است که به طور مستقل و ماتریس می شود</p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/templateadmin/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">حسین حسینی</div>
                                    <p>  قطر اما در حال حاضر عنصر درد، و یا آن را زشت</p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/templateadmin/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">اکبر اکبری</div>
                                    <p>یک قایق قبل و در اندوه فوتبال در آسانسور از پول و یا تبلیغات   نشستن</p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/templateadmin/demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">محمد محمدی</div>
                                    <p>برای برای من آنجا بزرگترین زندگی است، اما در حال حاضر بسیاری این هست ارزش گوجه فرنگی دشوار</p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/templateadmin/demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">رضا رضایی</div>
                                    <p>من راحتی مایکروویو بادام زمینی به گلو می شود. زمانی که ممکن است محفوظ است، حتی قبل از تامین مالی املاک و مستغلات</p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/templateadmin/demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">David Belle</div>
                                    <p>تقدیر اجتماعی است که به طور مستقل و ماتریس می شود</p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/templateadmin/demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">حسین حسینی</div>
                                    <p>  قطر اما در حال حاضر عنصر درد، و یا آن را زشت</p>
                                </div>
                            </a>

                            <a href="default.htm" class="listview__item">
                                <img src="/templateadmin/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                <div class="listview__content">
                                    <div class="listview__heading">اکبر اکبری</div>
                                    <p>یک قایق قبل و در اندوه فوتبال در آسانسور از پول و یا تبلیغات   نشستن</p>
                                </div>
                            </a>
                        </div>

                        <div class="p-1"></div>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="default.htm" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

                <div class="dropdown-menu dropdown-menu-left dropdown-menu--block" role="menu">
                    <div class="listview listview--hover">
                        <div class="listview__header"> وضایف</div>

                        <a href="default.htm" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">گزارش آخر هفته</div>

                                <div class="progress">
                                    <div class="progress-bar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading"> بررسی وضایف محوله</div>

                                <div class="progress">
                                    <div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>
                        <a href="default.htm" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading"> شبکه های اجتماعی</div>

                                <div class="progress">
                                    <div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>
                        <a href="default.htm" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading"> ادمین بوت استرپ</div>

                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>

                        <a href="default.htm" class="listview__item">
                            <div class="listview__content">
                                <div class="listview__heading">Youtube Client App</div>

                                <div class="progress">
                                    <div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </a>
                        <a href="default.htm" class="view-more"> مشاهده تمام وظایف</a>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down">
                <a href="default.htm" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

                <div class="dropdown-menu dropdown-menu-left dropdown-menu--block" role="menu">
                    <div class="row app-shortcuts">
                        <a class="col-4 app-shortcuts__item" href="default.htm">
                            <i class="zmdi zmdi-calendar bg-red"></i>
                            <small class=""> تقویم</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="default.htm">
                            <i class="zmdi zmdi-file-text bg-blue"></i>
                            <small class=""> فایل ها</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="default.htm">
                            <i class="zmdi zmdi-email bg-teal"></i>
                            <small class=""> ایمیل ها</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="default.htm">
                            <i class="zmdi zmdi-trending-up bg-blue-grey"></i>
                            <small class=""> گزارش ها</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="default.htm">
                            <i class="zmdi zmdi-view-headline bg-orange"></i>
                            <small class=""> خبرها</small>
                        </a>
                        <a class="col-4 app-shortcuts__item" href="default.htm">
                            <i class="zmdi zmdi-image bg-light-green"></i>
                            <small class=""> گالری</small>
                        </a>
                    </div>
                </div>
            </li>

            <li class="dropdown hidden-xs-down show">
                <a href="default.htm" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                <div class="dropdown-menu dropdown-menu-left">
                    <div class="dropdown-item theme-switch">
                        تغییر تم

                        <div class="btn-group btn-group--colors mt-2" data-toggle="buttons">
                            <label class="btn bg-green active"><input type="radio" value="green" autocomplete="off" checked></label>
                            <label class="btn bg-blue"><input type="radio" value="blue" autocomplete="off"></label>
                            <label class="btn bg-red"><input type="radio" value="red" autocomplete="off"></label>
                            <label class="btn bg-orange"><input type="radio" value="orange" autocomplete="off"></label>
                            <label class="btn bg-teal"><input type="radio" value="teal" autocomplete="off"></label>

                            <br>

                            <label class="btn bg-cyan"><input type="radio" value="cyan" autocomplete="off"></label>
                            <label class="btn bg-blue-grey"><input type="radio" value="blue-grey" autocomplete="off"></label>
                            <label class="btn bg-purple"><input type="radio" value="purple" autocomplete="off"></label>
                            <label class="btn bg-indigo"><input type="radio" value="indigo" autocomplete="off"></label>
                            <label class="btn bg-lime"><input type="radio" value="lime" autocomplete="off"></label>
                        </div>
                    </div>
                    <a href="default.htm" class="dropdown-item"> تمام صفحه</a>
                    <a href="default.htm" class="dropdown-item"> پاک کردن حافظه داخلی</a>
                </div>
            </li>

            <li class="hidden-xs-down">
                <a href="default.htm" data-ma-action="aside-open" data-ma-target=".chat" class="top-nav__notify">
                    <i class="zmdi zmdi-comment-alt-text"></i>
                </a>
            </li>
        </ul>
    </header>

    <aside class="sidebar">
        <div class="scrollbar-inner">
            <div class="user">
                <div class="user__info" data-toggle="dropdown">
                    <img class="user__img" src="/templateadmin/demo/img/profile-pics/8.jpg" alt="">
                    <div>
                        <div class="user__name">{{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
                        <div class="user__email">{{ \Illuminate\Support\Facades\Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="default.htm">مشاهده پروفایل</a>
                    <a class="dropdown-item" href="default.htm"> تنظیمات</a>
                    <a class="dropdown-item" href="default.htm"> خروج</a>
                </div>
            </div>

            <ul class="navigation">
                <li class="navigation__active"><a href="index.html"><i class="zmdi zmdi-home"></i> خانه</a></li>

                <li class="navigation__sub @@variantsactive">
                    <a href="default.htm"><i class="zmdi zmdi-view-week"></i> گزینه ها</a>

                    <ul>
                        <li class="@@sidebaractive"><a href="hidden-sidebar.html"> سایدبار مخفی</a></li>
                        <li class="@@boxedactive"><a href="boxed-layout.html"> لای اوت جعبه</a></li>
                        <li class="@@hiddensidebarboxedactive"><a href="hidden-sidebar-boxed-layout.html"> لای اوت جعبه   با سایدبار مخفی</a></li>
                        <li class="@@topnavigationactive"><a href="top-navigation.html">ناوبری بالا</a></li>
                    </ul>
                </li>

                <li class="@@typeactive"><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> تایپوگرافی</a></li>

                <li class="@@widgetactive"><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> ویجت ها</a></li>

                <li class="navigation__sub @@tableactive">
                    <a href="default.htm"><i class="zmdi zmdi-view-list"></i> جداول</a>

                    <ul>
                        <li class="@@normaltableactive"><a href="html-table.html"> جدول اچ تی ام ال</a></li>
                        <li class="@@datatableactive"><a href="data-table.html"> دیتا تیبل</a></li>
                    </ul>
                </li>

                <li class="navigation__sub @@formactive">
                    <a href="default.htm"><i class="zmdi zmdi-collection-text"></i> فرم ها</a>

                    <ul>
                        <li class="@@formelementactive"><a href="form-elements.html"> فرم با المان های پایه</a></li>
                        <li class="@@formcomponentactive"><a href="form-components.html">Form Components</a></li>
                        <li class="@@formvalidationactive"><a href="form-validation.html">اعتبار سنجی فرم</a></li>
                    </ul>
                </li>

                <li class="navigation__sub @@uiactive">
                    <a href="default.htm"><i class="zmdi zmdi-swap-alt"></i> رابط کاربری</a>

                    <ul>
                        <li class="@@colorsactive"><a href="colors.html"> رنگ ها</a></li>
                        <li class="@@cssanimationsactive"><a href="css-animations.html">CSS Animations</a></li>
                        <li class="@@buttonsactive"><a href="buttons.html"> دکمه ها</a></li>
                        <li class="@@iconsactive"><a href="icons.html"> آیکن ها</a></li>
                        <li class="@@listviewactive"><a href="listview.html">Listview</a></li>
                        <li class="@@toolbarsactive"><a href="toolbars.html"> نوار ابزار</a></li>
                        <li class="@@cardsactive"><a href="cards.html">Cards</a></li>
                        <li class="@@alertactive"><a href="alerts.html"> هشدارها</a></li>
                        <li class="@@badgesactive"><a href="badges.html">Badges</a></li>
                        <li class="@@breadcrumbsactive"><a href="breadcrumbs.html">Bredcrumbs</a></li>
                        <li class="@@jumbotronactive"><a href="jumbotron.html">Jumbotron</a></li>
                        <li class="@@navsactive"><a href="navs.html">Navs</a></li>
                        <li class="@@paginationactive"><a href="pagination.html"> صفحه بندی</a></li>
                        <li class="@@progress"><a href="progress.html"> پروگرس بار</a></li>
                    </ul>
                </li>

                <li class="navigation__sub @@componentsactive">
                    <a href="default.htm"><i class="zmdi zmdi-group-work"></i> کامپوننت های جاوا اسکریپت</a>

                    <ul class="navigation__sub">
                        <li class="@@carouselactive"><a href="carousel.html">Carousel</a></li>
                        <li class="@@collapseactive"><a href="collapse.html">Collapse</a></li>
                        <li class="@@dropdownsactive"><a href="dropdowns.html">Dropdowns</a></li>
                        <li class="@@modalsactive"><a href="modals.html">Modals</a></li>
                        <li class="@@popoveractive"><a href="popover.html">Popover</a></li>
                        <li class="@@tabsactive"><a href="tabs.html"> تب ها</a></li>
                        <li class="@@tooltipsactive"><a href="tooltips.html"> تولتیپ ها</a></li>
                        <li class="@@notificationsactive"><a href="notifications-alerts.html">اطلاعیه ها و هشدارها</a></li>
                    </ul>
                </li>

                <li class="navigation__sub @@chartsactive">
                    <a href="default.htm"><i class="zmdi zmdi-trending-up"></i> چارت ها</a>

                    <ul>
                        <li class="@@flotchartsactive"><a href="flot-charts.html">Flot</a></li>
                        <li class="@@otherchartsactive"><a href="other-charts.html">Other Charts</a></li>
                    </ul>
                </li>

                <li class="@@calendaractive"><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> تقویم</a></li>

                <li class="@@photogalleryactive"><a href="photo-gallery.html"><i class="zmdi zmdi-image"></i> گالری تصاویر</a></li>

                <li class="navigation__sub @@samplepagesactive">
                    <a href="default.htm"><i class="zmdi zmdi-collection-item"></i> صفحات مثال</a>

                    <ul>
                        <li class="@@profileactive"><a href="profile-about.html"> پروفایل</a></li>
                        <li class="@@messagesactive"><a href="messages.html"> پیام ها</a></li>
                        <li class="@@contactsactive"><a href="contacts.html"> ارتباط با ما</a></li>
                        <li class="@@groupsactive"><a href="groups.html"> گروه ها</a></li>
                        <li class="@@pricingtablesactive"><a href="pricing-tables.html"> جداول قیمت</a></li>
                        <li class="@@invoiceactive"><a href="invoice.html"> فاکتورها</a></li>
                        <li class="@@todoactive"><a href="todo-lists.html"> لیست های انجام کار</a></li>
                        <li class="@@notesactive"><a href="notes.html"> یاد داشت ها</a></li>
                        <li class="@@loginactive"><a href="login.html"> ورود و خروج</a></li>
                        <li class="@@lockscreenactive"><a href="lockscreen.html"> قفل صفحه</a></li>
                        <li class="@@lockscreenactive"><a href="404.html">404</a></li>
                        <li class="@@emptyactive"><a href="empty.html">صفحه خالی </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <aside class="chat">
        <div class="chat__header">
            <h2 class="chat__title">Chat <small>Currently 20 contacts online</small></h2>

            <div class="chat__search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="جستجو...">
                    <i class="form-group__bar"></i>
                </div>
            </div>
        </div>

        <div class="listview listview--hover chat__buddies scrollbar-inner">
            <a class="listview__item chat__available">
                <img src="/templateadmin/demo/img/profile-pics/7.jpg" class="listview__img" alt="">

                <div class="listview__content">
                    <div class="listview__heading">حسین اکبریان</div>
                    <p>حالت چطوره...</p>
                </div>
            </a>

            <a class="listview__item chat__available">
                <img src="/templateadmin/demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                <div class="listview__content">
                    <div class="listview__heading">حسین اکبریان</div>
                    <p>ممنون...</p>
                </div>
            </a>

            <a class="listview__item chat__away">
                <img src="/templateadmin/demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                <div class="listview__content">
                    <div class="listview__heading">حسین اکبریان</div>
                    <p>همه چیز رو به راهه</p>
                </div>
            </a>

            <a class="listview__item">
                <img src="/templateadmin/demo/img/profile-pics/8.jpg" class="listview__img" alt="">

                <div class="listview__content">
                    <div class="listview__heading">حسین اکبریان</div>
                    <p>فوتبال خنده شیر به عنوان دروازه ورودی اصلی در لوقا</p>
                </div>
            </a>

            <a class="listview__item">
                <img src="/templateadmin/demo/img/profile-pics/6.jpg" class="listview__img" alt="">

                <div class="listview__content">
                    <div class="listview__heading">حسین اکبریان</div>
                    <p>محمد رضایی</p>
                </div>
            </a>

            <a class="listview__item chat__busy">
                <img src="/templateadmin/demo/img/profile-pics/9.jpg" class="listview__img" alt="">

                <div class="listview__content">
                    <div class="listview__heading">حسین اکبریان</div>
                    <p>فردا، بسیاری از گوجه فرنگی هویج فلفل قرمز مخمر.</p>
                </div>
            </a>
        </div>

        <a href="messages.html" class="btn btn--action btn--fixed btn-danger"><i class="zmdi zmdi-plus"></i></a>
    </aside>

    <section class="content">
        <header class="content__title">
            <h1>داشبورد</h1>
            <small> به تجربه مدیریت منحصر به فرد در Material Design admin!
                خوش آمدید
            </small>

            <div class="actions">
                <a href="default.htm" class="actions__item zmdi zmdi-trending-up"></a>
                <a href="default.htm" class="actions__item zmdi zmdi-check-all"></a>

                <div class="dropdown actions__item">
                    <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                    <div class="dropdown-menu dropdown-menu-left">
                        <a href="default.htm" class="dropdown-item"> تازه سازی</a>
                        <a href="default.htm" class="dropdown-item"> مدیریت ویجت ها</a>
                        <a href="default.htm" class="dropdown-item"> تنظیمات</a>
                    </div>
                </div>
            </div>
        </header>

        <div class="row quick-stats">
            <div class="col-sm-6 col-md-3">
                <div class="quick-stats__item bg-light-blue">
                    <div class="quick-stats__info">
                        <h2>987,459</h2>
                        <small>  مجموعه ترافیک وب سایت</small>
                    </div>

                    <div class="quick-stats__chart sparkline-bar-stats">6,4,8,6,5,6,7,8,3,5,9,5</div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="quick-stats__item bg-amber">
                    <div class="quick-stats__info">
                        <h2>356,785K</h2>
                        <small>تعداد کل بازدیدکنندگان وب سایت</small>
                    </div>

                    <div class="quick-stats__chart sparkline-bar-stats">4,7,6,2,5,3,8,6,6,4,8,6</div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="quick-stats__item bg-purple">
                    <div class="quick-stats__info">
                        <h2>$58,778</h2>
                        <small>مجموع کل فروش</small>
                    </div>

                    <div class="quick-stats__chart sparkline-bar-stats">9,4,6,5,6,4,5,7,9,3,6,5</div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="quick-stats__item bg-red">
                    <div class="quick-stats__info">
                        <h2>214</h2>
                        <small>مجموع کل تیکت ها</small>
                    </div>

                    <div class="quick-stats__chart sparkline-bar-stats">5,6,3,9,7,5,4,6,5,6,4,9</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">آمار فروش</h2>
                        <small class="card-subtitle">فلفل قرمز ساخت و شکلات، ترس نرم افست</small>
                    </div>

                    <div class="card-block">
                        <div class="flot-chart flot-curved-line"></div>
                        <div class="flot-chart-legends flot-chart-legends--curved"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">نرخ رشد</h2>
                        <small class="card-subtitle">راحتی محفوظ عزاداری، اما هواپیمایی گشت و گذار توسعه نفرت</small>
                    </div>

                    <div class="card-block">
                        <div class="flot-chart flot-line"></div>
                        <div class="flot-chart-legends flot-chart-legends--line"></div>
                    </div>
                </div>
            </div>
        </div>

        <div data-columns>
            <div class="card">
                <img class="card-img-top" src="/templateadmin/demo/img/widgets/note.png" alt="">
                <div class="card-header">
                    <h2 class="card-title">لرم اپیزوم دلاکو</h2>
                    <div class="card-subtitle">توسط رضا حسینی در تاریخ ...
                    </div>
                </div>
                <div class="card-block">
                    <p>متاسفانه، نویسنده برای لنها هیچ نیازهای برآورده نشده. مشین فقط نفرت، پروتئین و آنتی اکسیدان ها در فقر و نیاز. محمد رضایی، زمین و در حال اجرا راحتی، او در سس در اندوه تنها بسیاری از خنده توده جوش و خروش. هست را به دنبال او ان دروازه همیشه. است هیچ توسعه دهنده آزاد از یک تیردان وجود دارد.</p>
                    <a href="default.htm" class="view-more text-left">مشاهده مقاله ...</a>
                </div>
            </div>

            <div class="card widget-visitors">
                <div class="card-header">
                    <h2 class="card-title">بازدید کننده های واقعی</h2>
                    <small class="card-subtitle">بدون درد ان هست وسایل نقلیه کارشناسی</small>
                </div>

                <div class="card-block">
                    <div class="widget-visitors__stats">
                        <div>
                            <strong>23528</strong>
                            <small>بازدید کننده ها در 24 ساعت گذشته</small>
                        </div>
                        <div>
                            <strong>746</strong>
                            <small>بازدید کننده ها در 30 دقیقه گذشته </small>
                        </div>
                    </div>

                    <div class="widget-visitors__map map-visitors"></div>
                </div>

                <div class="listview listview--bordered">
                    <div class="listview__item">
                        <div class="listview__content">
                            <div class="listview__heading">دوشنبه ، 5 بهمن, 21:44:02 (2 56 دقیقه)</div>

                            <div class="listview__attrs">
                                <span><img class="widget-visitors__country" src="/templateadmin/demo/img/flags/United_States_of_America.png" alt=""> آمریکا</span>
                                <span>Firefox</span>
                                <span>Mac OSX</span>
                            </div>
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="listview__content">
                            <div class="listview__heading">دوشنبه ، 5 بهمن, 20:21:01 (5 12 دقیقه)</div>

                            <div class="listview__attrs">
                                <span><img class="widget-visitors__country" src="/templateadmin/demo/img/flags/Australia.png" alt=""> Australia</span>
                                <span>Chrome</span>
                                <span>Android</span>
                            </div>
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="listview__content">
                            <div class="listview__heading">دوشنبه ، 5 بهمن, 20:21:10 (10 12 دقیقه)</div>

                            <div class="listview__attrs">
                                <span><img class="widget-visitors__country" src="/templateadmin/demo/img/flags/Brazil.png" alt="">برزیل</span>
                                <span>Edge</span>
                                <span> ویندوز</span>
                            </div>
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="listview__content">
                            <div class="listview__heading">دوشنبه ، 5 بهمن, 20:59:04 (1 2 دقیقه)</div>

                            <div class="listview__attrs">
                                <span><img class="widget-visitors__country" src="/templateadmin/demo/img/flags/South_Korea.png" alt="">کره جنوبی</span>
                                <span>Chrome</span>
                                <span>Android</span>
                            </div>
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="listview__content">
                            <div class="listview__heading">دوشنبه ، 5 بهمن, 20:58:12 (3 Min 44 Seconds)</div>

                            <div class="listview__attrs">
                                <span><img class="widget-visitors__country" src="/templateadmin/demo/img/flags/Japan.png" alt="">ژاپن</span>
                                <span>Chrome</span>
                                <span> ویندوز</span>
                            </div>
                        </div>
                    </div>

                    <a href="default.htm" class="view-more">مشاهده همه</a>
                </div>
            </div>

            <div class="card card-inverse widget-past-days">
                <div class="card-header">
                    <h2 class="card-title">در 30 روز گذشته</h2>
                    <small class="card-subtitle">بدون درد ان هست وسایل نقلیه کارشناسی</small>
                </div>

                <div class="widget-past-days__main">
                    <div class="flot-chart flot-chart--sm flot-past-days"></div>
                </div>

                <div class="listview listview--inverse listview--striped">
                    <div class="listview__item">
                        <div class="widget-past-days__info">
                            <small>بازدید صفحات</small>
                            <h3>47,896,536</h3>
                        </div>

                        <div class="widget-past-days__chart hidden-sm">
                            <div class="sparkline-bar-stats">6,9,5,6,3,7,5,4,6,5,6,4,2,5,8,2,6,9</div>
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="widget-past-days__info">
                            <small>بازدیدکنندگان سایت</small>
                            <h3>24,456,799</h3>
                        </div>

                        <div class="widget-past-days__chart hidden-sm">
                            <div class="sparkline-bar-stats">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="widget-past-days__info">
                            <small>مجموع کلیک ها</small>
                            <h3>13,965</h3>
                        </div>

                        <div class="widget-past-days__chart hidden-sm">
                            <div class="sparkline-bar-stats">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                        </div>
                    </div>

                    <div class="listview__item">
                        <div class="widget-past-days__info">
                            <small>مجموع بازگشت</small>
                            <h3>198</h3>
                        </div>

                        <div class="widget-past-days__chart hidden-sm">
                            <div class="sparkline-bar-stats">3,9,1,3,5,6,7,6,8,2,5,2,7,5,6,7,6,8</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card todo">
                <div class="card-header">
                    <h2 class="card-title"> لیست های انجام کار</h2>
                    <small class="card-subtitle">سترون، انجام مبتدی ان</small>
                </div>

                <div class="listview">
                    <div class="listview__item">
                        <label class="custom-control custom-control--char todo__item">
                            <input class="custom-control-input" type="checkbox" value="" checked>
                            <span class="custom-control--char__helper"><i class="bg-amber">F</i></span>
                            <div class="todo__info">
                                <span>من فلش، مخازن، مخازن یا تبلیغات او درد گلو آرایش</span>
                                <small>امروز ساعت 8 صبح</small>
                            </div>

                            <div class="listview__attrs">
                                <span># پیام ها</span>
                                <span>!!!</span>
                            </div>
                        </label>

                        <div class="actions listview__actions">
                            <div class="dropdown actions__item">
                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="default.htm">علامت گذاری به عنوان تکمیل شده</a>
                                    <a class="dropdown-item" href="default.htm"> حذف</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="listview__item">
                        <label class="custom-control custom-control--char todo__item">
                            <input class="custom-control-input" type="checkbox" value="" checked>
                            <span class="custom-control--char__helper"><i class="bg-light-blue">N</i></span>
                            <div class="todo__info">
                                <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</span>
                                <small>امروز ساعت 12.30 PM</small>
                            </div>

                            <div class="listview__attrs">
                                <span># مشتریان</span>
                                <span>!!</span>
                            </div>
                        </label>

                        <div class="actions listview__actions">
                            <div class="dropdown actions__item">
                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="default.htm">علامت گذاری به عنوان تکمیل شده</a>
                                    <a class="dropdown-item" href="default.htm"> حذف</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="listview__item">
                        <label class="custom-control custom-control--char todo__item">
                            <input class="custom-control-input" type="checkbox" value="">
                            <span class="custom-control--char__helper"><i class="bg-purple">C</i></span>
                            <div class="todo__info">
                                <span>فردا، بسیاری از گوجه فرنگی هویج فلفل قرمز مخمر</span>
                                <small>امروز ساعت 10.30 AM</small>
                            </div>

                            <div class="listview__attrs">
                                <span># مشتریان</span>
                                <span>!!</span>
                            </div>
                        </label>

                        <div class="actions listview__actions">
                            <div class="dropdown actions__item">
                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="default.htm">علامت گذاری به عنوان تکمیل شده</a>
                                    <a class="dropdown-item" href="default.htm"> حذف</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="listview__item">
                        <label class="custom-control custom-control--char todo__item">
                            <input class="custom-control-input" type="checkbox" value="">
                            <span class="custom-control--char__helper"><i class="bg-lime">I</i></span>
                            <div class="todo__info">
                                <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</span>
                                <small>05/08/2017 at 08.00 AM</small>
                            </div>

                            <div class="listview__attrs">
                                <span>#Server</span>
                                <span>!</span>
                            </div>
                        </label>

                        <div class="actions listview__actions">
                            <div class="dropdown actions__item">
                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="default.htm">علامت گذاری به عنوان تکمیل شده</a>
                                    <a class="dropdown-item" href="default.htm"> حذف</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="listview__item">
                        <label class="custom-control custom-control--char todo__item">
                            <input class="custom-control-input" type="checkbox" value="">
                            <span class="custom-control--char__helper"><i class="bg-red">P</i></span>
                            <div class="todo__info">
                                <span>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</span>
                                <small>10/08/2016 at 04.00 AM</small>
                            </div>

                            <div class="listview__attrs">
                                <span>#Server</span>
                                <span>!!!</span>
                            </div>
                        </label>

                        <div class="actions listview__actions">
                            <div class="dropdown actions__item">
                                <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="default.htm">علامت گذاری به عنوان تکمیل شده</a>
                                    <a class="dropdown-item" href="default.htm"> حذف</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="todos.html" class="view-more">View More</a>
                </div>
            </div>

            <div class="card card-inverse widget-pie">
                <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                    <div class="easy-pie-chart" data-percent="50" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                        <span class="easy-pie-chart__value">92</span>
                    </div>
                    <div class="widget-pie__title"> ایمیل ها<br> Scheduled</div>
                </div>

                <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                    <div class="easy-pie-chart" data-percent="11" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                        <span class="easy-pie-chart__value">11</span>
                    </div>
                    <div class="widget-pie__title"> ایمیل ها<br> Bounced</div>
                </div>

                <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                    <div class="easy-pie-chart" data-percent="52" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                        <span class="easy-pie-chart__value">52</span>
                    </div>
                    <div class="widget-pie__title"> ایمیل ها<br> Opened</div>
                </div>

                <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                    <div class="easy-pie-chart" data-percent="44" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                        <span class="easy-pie-chart__value">44</span>
                    </div>
                    <div class="widget-pie__title">Storage<br>Remaining</div>
                </div>

                <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                    <div class="easy-pie-chart" data-percent="78" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                        <span class="easy-pie-chart__value">78</span>
                    </div>
                    <div class="widget-pie__title">Web Page<br> Views</div>
                </div>

                <div class="col-6 col-sm-4 col-md-6 col-lg-4 widget-pie__item">
                    <div class="easy-pie-chart" data-percent="32" data-size="80" data-track-color="rgba(0,0,0,0.08)" data-bar-color="#fff">
                        <span class="easy-pie-chart__value">32</span>
                    </div>
                    <div class="widget-pie__title">Server<br> Processing</div>
                </div>
            </div>

            <div class="card widget-calendar">
                <div class="card-header bg-light-blue">
                    <div class="widget-calendar__year"></div>
                    <div class="widget-calendar__day"></div>

                    <a href="calendar.html" class="bg-orange btn btn--action"><i class="zmdi zmdi-plus"></i></a>
                </div>

                <div class="widget-calendar__body"></div>
            </div>
        </div>

        <footer class="footer hidden-xs-down">
            <p>© تمام حقوق محفوظ است.</p>

            <ul class="nav footer__nav">
                <a class="nav-link" href="default.htm"> صفحه اصلی</a>

                <a class="nav-link" href="default.htm"> شرکت</a>

                <a class="nav-link" href="default.htm"> پشتیبانی</a>

                <a class="nav-link" href="default.htm"> خبرها</a>

                <a class="nav-link" href="default.htm"> ارتباط با ما</a>
            </ul>
        </footer>
    </section>
</main>

<!-- Older IE warning message -->
<!--[if IE]>
<div class="ie-warning">
    <h1>اخطار !!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

    <div class="ie-warning__downloads">
        <a href="http://www.google.com/chrome">
            <img src="/templateadmin/img/browsers/chrome.png" alt="">
        </a>

        <a href="http://https@www.mozilla.org/en-US/firefox/new">
            <img src="/templateadmin/img/browsers/firefox.png" alt="">
        </a>

        <a href="http://www.opera.com/default.htm">
            <img src="/templateadmin/img/browsers/opera.png" alt="">
        </a>

        <a href="http://support.apple.com/downloads/safari">
            <img src="/templateadmin/img/browsers/safari.png" alt="">
        </a>

        <a href="http://www.microsoft.com/en-us/windows/microsoft-edge">
            <img src="img/browsers/edge.png" alt="">
        </a>

        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
            <img src="img/browsers/ie.png" alt="">
        </a>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>

<![endif]-->



<script src="/js/admin.js"></script>

<!-- Charts and maps-->

</body>
</html>
