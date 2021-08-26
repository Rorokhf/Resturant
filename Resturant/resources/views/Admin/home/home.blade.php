@extends('Admin.layout.app')

@section('title','Home')


@section('content')


<div class="row">
    <div class="col-12">
        <h3 class="content-heading mt-3">Counter Up</h3>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row counter-wrapper">
                    <div class="col-sm-3 col-6">
                        <div class="card-body text-center">
                            <h4 class="counter">147</h4>
                            <span>Orders</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="card-body text-center">
                            <h4 class="counter">83</h4>
                            <span>Delivered</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="card-body text-center">
                            <h4 class="counter">64</h4>
                            <span>Pending</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-6">
                        <div class="card-body text-center">
                            <h4 class="counter">12345</h4>
                            <span>Earned</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-xxl-6">




            <div class="card top_menu_widget">
                <div class="card-body">
                    <h4 class="card-title">Top Menus</h4>
                    <div class="media border-bottom pt-3 pb-3">
                        <img width="50" height="50"  alt="#" class="mr-3" src="../../assets/images/menu/menu1.png">
                        <div class="media-body">
                            <h5 class="mb-1 mt-sm-1 mt-0">Fried Egg Sandwich</h5>
                            <span>Egg, Sandwich</span>
                        </div>
                        <h5 class="badge-lighten-primary">$268</h5>
                    </div>
                    <div class="media border-bottom pt-3 pb-3">
                        <img width="50" height="50"  alt="#" class="mr-3" src="../../assets/images/menu/menu2.png">
                        <div class="media-body">
                            <h5 class="mb-1 mt-sm-1 mt-0">French Crostini</h5>
                            <span>French, Spicy</span>
                        </div>
                        <h5 class="badge-lighten-success">$268</h5>
                    </div>
                    <div class="media border-bottom pt-3 pb-3">
                        <img width="50" height="50"  alt="#" class="mr-3" src="../../assets/images/menu/menu3.png">
                        <div class="media-body">
                            <h5 class="mb-1 mt-sm-1 mt-0">Redwine and Colddrinks</h5>
                            <span>Drinks, Wine</span>
                        </div>
                        <h5 class="badge-lighten-info">$268</h5>
                    </div>
                    <div class="media border-bottom pt-3 pb-3">
                        <img width="50" height="50"  alt="#" class="mr-3" src="../../assets/images/menu/menu4.png">
                        <div class="media-body">
                            <h5 class="mb-1 mt-sm-1 mt-0">Multigrain Hot Cereal</h5>
                            <span>Hot, Spicy</span>
                        </div>
                        <h5 class="badge-lighten-warning">$268</h5>
                    </div>
                    <div class="media border-bottom pt-3 pb-3">
                        <img width="50" height="50"  alt="#" class="mr-3" src="../../assets/images/menu/menu5.png">
                        <div class="media-body">
                            <h5 class="mb-1 mt-sm-1 mt-0">Lemon Yogurt Parfait</h5>
                            <span>Juice, Cold</span>
                        </div>
                        <h5 class="badge-lighten-danger">$268</h5>
                    </div>
                    <div class="media pt-3 pb-3">
                        <img width="50" height="50"  alt="#" class="mr-3" src="../../assets/images/menu/menu6.png">
                        <div class="media-body">
                            <h5 class="mb-1 mt-sm-1 mt-0">Branch Special</h5>
                            <span>Hot, Spicy</span>
                        </div>
                        <h5 class="badge-lighten-primary">$268</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-xxl-6">
            <div class="card">
                <div class="card-body px-0">
                    <h4 class="card-title px-4 mb-3">Todo</h4>
                    <div class="todo-list">
                        <div class="tdl-holder">
                            <div class="tdl-content">
                                <ul id="todo_list">
                                    <li><label><input type="checkbox"><i></i><span>Decorate kitchen room</span><a href='#' class="ti-trash"></a></label></li>
                                    <li><label><input type="checkbox" checked><i></i><span>Deliver Pizza</span><a href='#' class="ti-trash"></a></label></li>
                                    <li><label><input type="checkbox"><i></i><span>Meeting with McDonalds</span><a href='#' class="ti-trash"></a></label></li>
                                    <li><label><input type="checkbox" checked><i></i><span>New Branch Opening</span><a href='#' class="ti-trash"></a></label></li>
                                    <li><label><input type="checkbox"><i></i><span>New feature launching</span><a href='#' class="ti-trash"></a></label></li>
                                    <li><label><input type="checkbox" checked><i></i><span>Meeting with KFC</span><a href='#' class="ti-trash"></a></label></li>
                                </ul>
                            </div>
                            <div class="px-4">
                                <input type="text" class="tdl-new form-control" placeholder="Write new item and hit 'Enter'...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
