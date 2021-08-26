@extends('Admin.layout.app')

@section('title','Menu')

@section('links')

@endsection

@section('content')



<div class="row">
    <div class="col-xl-3 col-sm-6 col-xxl-6">
        <div class="card vertical-card__menu">
            <span class="ribbon ribbon__two vertical-card__menu--offer">50%</span>
            <div class="card-header p-0">
                <div class="vertical-card__menu--image">
                    <img src="../../assets/images/menu/granny-menu11.jpg" alt="Menu">
                </div>
            </div>
            <div class="card-body p-0">
                <div class="vertical-card__menu--desc p-3">
                    <div class="d-flex justify-content-between">
                        <h4 class="vertical-card__menu--title">Fried Egg Sandwich</h4>
                        <div class="vertical-card__menu--fav">
                            <a href="javascript:void()"><i class="fa fa-heart-o"></i></a>
                        </div>
                    </div>
                    <p>Apple Juice, Beef Roast, Cheese Burger</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="vertical-card__menu--price"> <span>$60</span> </h2>
                        <div class="vertical-card__menu--rating c-pointer">
                            <span class="icon"><h1 class="fa fa-star">Total Order :150</h1></span>
                            <span class="icon"><h1 class="fa fa-star"> Revenue :$1000</h1></span>


                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
                <div class="vertical-card__menu--location">


            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h3 class="content-heading">Ticker</h3>
            </div>
        </div>
        <div class="card">
            <div class="crypto-ticker card-body px-0">
                <ul id="webticker-dark-icons">
                    <li data-update="item1">
                        <div class="card horizontal-card__menu mb-0 horizontal">
                            <span class="ribbon ribbon__one vertical-card__menu--status">Available <em class="ribbon-curve"></em></span>
                            <div class="horizontal-card__menu--image">
                                <img src="../../assets/images/menu/2.jpg" alt="menu">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="horizontal-card__menu--title">Nature Healthy Food</h4>
                                    <div class="horizontal-card__menu--fav">
                                        <a href="javascript:void()"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <p class="mb-2">Apple Juice, Beef Roast, Cheese Burger</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="horizontal-card__menu--price">$<span>54</span></h4>
                                    <div class="horizontal-card__menu--rating c-pointer">
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star-o"></i></span>
                                    </div>
                                </div>
                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                    <div class="vertical-card__menu--location">
                                        <div class="d-block">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                            Bristol, Bristol
                                        </div>
                                        <div>
                                            <span class="icon"><i class="fa fa-motorcycle"></i></span>
                                            <span>10 min</span>
                                            <span class="icon ml-2"><i class="fa fa-clock-o"></i></span>
                                            <span>15min</span>
                                        </div>
                                    </div>
                                    <div class="vertical-card__menu--button">
                                        <button class="btn btn-rounded">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-update="item2">
                        <div class="card horizontal-card__menu mb-0 horizontal">
                            <span class="ribbon ribbon__one vertical-card__menu--status">Available <em class="ribbon-curve"></em></span>
                            <div class="horizontal-card__menu--image">
                                <img src="../../assets/images/menu/2.jpg" alt="menu">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="horizontal-card__menu--title">Nature Healthy Food</h4>
                                    <div class="horizontal-card__menu--fav">
                                        <a href="javascript:void()"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <p class="mb-2">Apple Juice, Beef Roast, Cheese Burger</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="horizontal-card__menu--price">$<span>54</span></h4>
                                    <div class="horizontal-card__menu--rating c-pointer">
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star-o"></i></span>
                                    </div>
                                </div>
                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                    <div class="vertical-card__menu--location">
                                        <div class="d-block">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                            Bristol, Bristol
                                        </div>
                                        <div>
                                            <span class="icon"><i class="fa fa-motorcycle"></i></span>
                                            <span>10 min</span>
                                            <span class="icon ml-2"><i class="fa fa-clock-o"></i></span>
                                            <span>15min</span>
                                        </div>
                                    </div>
                                    <div class="vertical-card__menu--button">
                                        <button class="btn btn-rounded">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-update="item3">
                        <div class="card horizontal-card__menu mb-0 horizontal">
                            <span class="ribbon ribbon__one vertical-card__menu--status">Available <em class="ribbon-curve"></em></span>
                            <div class="horizontal-card__menu--image">
                                <img src="../../assets/images/menu/2.jpg" alt="menu">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="horizontal-card__menu--title">Nature Healthy Food</h4>
                                    <div class="horizontal-card__menu--fav">
                                        <a href="javascript:void()"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <p class="mb-2">Apple Juice, Beef Roast, Cheese Burger</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="horizontal-card__menu--price">$<span>54</span></h4>
                                    <div class="horizontal-card__menu--rating c-pointer">
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star-o"></i></span>
                                    </div>
                                </div>
                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                    <div class="vertical-card__menu--location">
                                        <div class="d-block">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                            Bristol, Bristol
                                        </div>
                                        <div>
                                            <span class="icon"><i class="fa fa-motorcycle"></i></span>
                                            <span>10 min</span>
                                            <span class="icon ml-2"><i class="fa fa-clock-o"></i></span>
                                            <span>15min</span>
                                        </div>
                                    </div>
                                    <div class="vertical-card__menu--button">
                                        <button class="btn btn-rounded">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-update="item4">
                        <div class="card horizontal-card__menu mb-0 horizontal">
                            <span class="ribbon ribbon__one vertical-card__menu--status">Available <em class="ribbon-curve"></em></span>
                            <div class="horizontal-card__menu--image">
                                <img src="../../assets/images/menu/2.jpg" alt="menu">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="horizontal-card__menu--title">Nature Healthy Food</h4>
                                    <div class="horizontal-card__menu--fav">
                                        <a href="javascript:void()"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <p class="mb-2">Apple Juice, Beef Roast, Cheese Burger</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="horizontal-card__menu--price">$<span>54</span></h4>
                                    <div class="horizontal-card__menu--rating c-pointer">
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star-o"></i></span>
                                    </div>
                                </div>
                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                    <div class="vertical-card__menu--location">
                                        <div class="d-block">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                            Bristol, Bristol
                                        </div>
                                        <div>
                                            <span class="icon"><i class="fa fa-motorcycle"></i></span>
                                            <span>10 min</span>
                                            <span class="icon ml-2"><i class="fa fa-clock-o"></i></span>
                                            <span>15min</span>
                                        </div>
                                    </div>
                                    <div class="vertical-card__menu--button">
                                        <button class="btn btn-rounded">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-update="item5">
                        <div class="card horizontal-card__menu mb-0 horizontal">
                            <span class="ribbon ribbon__one vertical-card__menu--status">Available <em class="ribbon-curve"></em></span>
                            <div class="horizontal-card__menu--image">
                                <img src="../../assets/images/menu/2.jpg" alt="menu">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="horizontal-card__menu--title">Nature Healthy Food</h4>
                                    <div class="horizontal-card__menu--fav">
                                        <a href="javascript:void()"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <p class="mb-2">Apple Juice, Beef Roast, Cheese Burger</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="horizontal-card__menu--price">$<span>54</span></h4>
                                    <div class="horizontal-card__menu--rating c-pointer">
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star-o"></i></span>
                                    </div>
                                </div>
                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                    <div class="vertical-card__menu--location">
                                        <div class="d-block">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                            Bristol, Bristol
                                        </div>
                                        <div>
                                            <span class="icon"><i class="fa fa-motorcycle"></i></span>
                                            <span>10 min</span>
                                            <span class="icon ml-2"><i class="fa fa-clock-o"></i></span>
                                            <span>15min</span>
                                        </div>
                                    </div>
                                    <div class="vertical-card__menu--button">
                                        <button class="btn btn-rounded">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-update="item6">
                        <div class="card horizontal-card__menu mb-0 horizontal">
                            <span class="ribbon ribbon__one vertical-card__menu--status">Available <em class="ribbon-curve"></em></span>
                            <div class="horizontal-card__menu--image">
                                <img src="../../assets/images/menu/2.jpg" alt="menu">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="horizontal-card__menu--title">Nature Healthy Food</h4>
                                    <div class="horizontal-card__menu--fav">
                                        <a href="javascript:void()"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <p class="mb-2">Apple Juice, Beef Roast, Cheese Burger</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="horizontal-card__menu--price">$<span>54</span></h4>
                                    <div class="horizontal-card__menu--rating c-pointer">
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star-o"></i></span>
                                    </div>
                                </div>
                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                    <div class="vertical-card__menu--location">
                                        <div class="d-block">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                            Bristol, Bristol
                                        </div>
                                        <div>
                                            <span class="icon"><i class="fa fa-motorcycle"></i></span>
                                            <span>10 min</span>
                                            <span class="icon ml-2"><i class="fa fa-clock-o"></i></span>
                                            <span>15min</span>
                                        </div>
                                    </div>
                                    <div class="vertical-card__menu--button">
                                        <button class="btn btn-rounded">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-update="item7">
                        <div class="card horizontal-card__menu mb-0 horizontal">
                            <span class="ribbon ribbon__one vertical-card__menu--status">Available <em class="ribbon-curve"></em></span>
                            <div class="horizontal-card__menu--image">
                                <img src="../../assets/images/menu/2.jpg" alt="menu">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="horizontal-card__menu--title">Nature Healthy Food</h4>
                                    <div class="horizontal-card__menu--fav">
                                        <a href="javascript:void()"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <p class="mb-2">Apple Juice, Beef Roast, Cheese Burger</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="horizontal-card__menu--price">$<span>54</span></h4>
                                    <div class="horizontal-card__menu--rating c-pointer">
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star-o"></i></span>
                                    </div>
                                </div>
                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                    <div class="vertical-card__menu--location">
                                        <div class="d-block">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                            Bristol, Bristol
                                        </div>
                                        <div>
                                            <span class="icon"><i class="fa fa-motorcycle"></i></span>
                                            <span>10 min</span>
                                            <span class="icon ml-2"><i class="fa fa-clock-o"></i></span>
                                            <span>15min</span>
                                        </div>
                                    </div>
                                    <div class="vertical-card__menu--button">
                                        <button class="btn btn-rounded">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-update="item8">
                        <div class="card horizontal-card__menu mb-0 horizontal">
                            <span class="ribbon ribbon__one vertical-card__menu--status">Available <em class="ribbon-curve"></em></span>
                            <div class="horizontal-card__menu--image">
                                <img src="../../assets/images/menu/2.jpg" alt="menu">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="horizontal-card__menu--title">Nature Healthy Food</h4>
                                    <div class="horizontal-card__menu--fav">
                                        <a href="javascript:void()"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <p class="mb-2">Apple Juice, Beef Roast, Cheese Burger</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="horizontal-card__menu--price">$<span>54</span></h4>
                                    <div class="horizontal-card__menu--rating c-pointer">
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star-o"></i></span>
                                    </div>
                                </div>
                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                    <div class="vertical-card__menu--location">
                                        <div class="d-block">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                            Bristol, Bristol
                                        </div>
                                        <div>
                                            <span class="icon"><i class="fa fa-motorcycle"></i></span>
                                            <span>10 min</span>
                                            <span class="icon ml-2"><i class="fa fa-clock-o"></i></span>
                                            <span>15min</span>
                                        </div>
                                    </div>
                                    <div class="vertical-card__menu--button">
                                        <button class="btn btn-rounded">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-update="item9">
                        <div class="card horizontal-card__menu mb-0 horizontal">
                            <span class="ribbon ribbon__one vertical-card__menu--status">Available <em class="ribbon-curve"></em></span>
                            <div class="horizontal-card__menu--image">
                                <img src="../../assets/images/menu/2.jpg" alt="menu">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="horizontal-card__menu--title">Nature Healthy Food</h4>
                                    <div class="horizontal-card__menu--fav">
                                        <a href="javascript:void()"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <p class="mb-2">Apple Juice, Beef Roast, Cheese Burger</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="horizontal-card__menu--price">$<span>54</span></h4>
                                    <div class="horizontal-card__menu--rating c-pointer">
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star-o"></i></span>
                                    </div>
                                </div>
                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                    <div class="vertical-card__menu--location">
                                        <div class="d-block">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                            Bristol, Bristol
                                        </div>
                                        <div>
                                            <span class="icon"><i class="fa fa-motorcycle"></i></span>
                                            <span>10 min</span>
                                            <span class="icon ml-2"><i class="fa fa-clock-o"></i></span>
                                            <span>15min</span>
                                        </div>
                                    </div>
                                    <div class="vertical-card__menu--button">
                                        <button class="btn btn-rounded">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-update="item10">
                        <div class="card horizontal-card__menu mb-0 horizontal">
                            <span class="ribbon ribbon__one vertical-card__menu--status">Available <em class="ribbon-curve"></em></span>
                            <div class="horizontal-card__menu--image">
                                <img src="../../assets/images/menu/2.jpg" alt="menu">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h4 class="horizontal-card__menu--title">Nature Healthy Food</h4>
                                    <div class="horizontal-card__menu--fav">
                                        <a href="javascript:void()"><i class="fa fa-heart-o"></i></a>
                                    </div>
                                </div>
                                <p class="mb-2">Apple Juice, Beef Roast, Cheese Burger</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="horizontal-card__menu--price">$<span>54</span></h4>
                                    <div class="horizontal-card__menu--rating c-pointer">
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star"></i></span>
                                        <span class="icon"><i class="fa fa-star-o"></i></span>
                                    </div>
                                </div>
                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                    <div class="vertical-card__menu--location">
                                        <div class="d-block">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                            Bristol, Bristol
                                        </div>
                                        <div>
                                            <span class="icon"><i class="fa fa-motorcycle"></i></span>
                                            <span>10 min</span>
                                            <span class="icon ml-2"><i class="fa fa-clock-o"></i></span>
                                            <span>15min</span>
                                        </div>
                                    </div>
                                    <div class="vertical-card__menu--button">
                                        <button class="btn btn-rounded">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

 <!-- Ticker -->
 <script src="{{asset('assets/plugins/webticker/jquery.webticker.min.js')}}"></script>
 <!-- Bootstrap notify -->
 <script src="{{asset('assets/plugins/bootstrap4-notify/bootstrap-notify.min.js')}}"></script>
 <!-- ClipboardJS -->
 <script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
 <!-- Sweetalert -->
 <script src="{{asset('assets/plugins/sweetalert2/dist/sweetalert2.min.js')}}"></script>
 <!-- Nestable -->
 <script src="{{asset('assets/plugins/nestable2/js/jquery.nestable.min.js')}}"></script>
 <!-- BlockUI -->
 <script src="{{asset('assets/plugins/block-ui/jquery.blockUI.js')}}"></script>
 <!-- Pignose Calender -->
 <script src="../../assets/plugins/moment/moment.min.js"></script>
 <script src="{{asset('assets/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
 <!-- Datamap -->
 <script src="{{asset('assets/plugins/d3v3/index.js')}}"></script>
 <script src="{{asset('assets/plugins/topojson/topojson.min.js')}}"></script>
 <script src="{{asset('assets/plugins/datamaps/datamaps.world.min.js')}}"></script>
 <!-- Vectormap -->
 <script src="{{asset('assets/plugins/jqvmap/js/jquery.vmap.min.js')}}"></script>
 <script src="{{asset('assets/plugins/jqvmap/js/jquery.vmap.world.js')}}"></script>
 <script src="{{asset('assets/plugins/jqvmap/js/jquery.vmap.usa.js')}}"></script>
 <!-- NoUI SLider -->
 <script src="{{asset('assets/plugins/nouislider/nouislider.min.js')}}"></script>
 <script src="{{asset('assets/plugins/wnumb/wNumb.js')}}"></script>
 <!-- Counter Up -->
 <script src="{{asset('assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
 <script src="{{asset('assets/plugins/jquery.counterup/jquery.counterup.min.js')}}"></script>
 <!-- Bootstrap select -->
 <script src="{{asset('assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>




 <!-- All init script -->
 <script src="{{asset('js/plugins-init/components-init.js')}}"></script>

@endsection
