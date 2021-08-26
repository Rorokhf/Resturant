@extends('Admin.layout.app')
@section('title','Employee')


@section('links')

@endsection
@section('content')



<div class="col-lg-4 col-md-5 col-xxl-4 col-xl-3">
    <div class="card">
        <div class="card-body">
            <div class="media align-items-center mb-4">
                <img class="mr-3 rounded-circle mr-0 mr-sm-3" src="../../assets/images/avatar/avatar-media.png" width="80" height="80" alt="">
                <div class="media-body">
                    <h3 class="mb-0">Pikamy Cha</h3>
                    <p class="text-muted mb-0">Canada</p>
                </div>
            </div>

            <div class="row mb-5">

                <div class="col">
                    <div class="card-profile border-0 text-center">
                        <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                        <h3 class="mb-0">Jobee</h3>
                        <p class="text-muted">Cooker</p>
                    </div>
                </div>

                <div class="col">
                    <div class="card-profile border-0 text-center">
                        <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                        <h3 class="mb-0">salary</h3>
                        <p class="text-muted">2K</p>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-danger px-5">Activity</button>
                </div>
            </div>

            <h4>About Me</h4>
            <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>
            <ul class="card-profile__info">
                <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li>
                <li><strong class="text-dark mr-4">Email</strong> <span>name@domain.com</span></li>
            </ul>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('assets/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('js/settings.js')}}"></script>
    <script src="{{asset('js/quixnav.js')}}"></script>
    <script src="{{asset('js/styleSwitcher.js')}}"></script>

@endsection
