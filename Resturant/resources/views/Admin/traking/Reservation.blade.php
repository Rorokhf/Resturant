@extends('Admin.layout.app')

@section('title','Reservations')

@section('links')
      <!-- Date Dropper -->
      <link rel="stylesheet" href="{{asset('assets/plugins/datedropper/datedropper.min.css')}}">
      <!-- Timepicki -->
      <link rel="stylesheet" href="{{asset('assets/plugins/timepicki/css/timepicki.css')}}">
      <link href="{{asset('css/style.css')}}" rel="stylesheet">
@endsection
@section('content')

<div class="">
<div class="col-xl-5">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Timeline</h4>
            <div id="timeline-activity">
                <ul class="timeline mb-0">
                    <li>
                        <div class="timeline-badge bg-primary"></div>
                        <a href="#" class="timeline-panel">
                            <span>Today</span>
                            <h5 class="mt-2">Wedding party catering</h5>
                        </a>
                    </li>
                    <li>
                        <div class="timeline-badge bg-success"></div>
                        <a href="#" class="timeline-panel">
                            <span>Today</span>
                            <h5 class="mt-2">Birthday party catering</h5>
                        </a>
                    </li>
                    <li>
                        <div class="timeline-badge bg-warning"></div>
                        <a href="#" class="timeline-panel">
                            <span>Tommorow</span>
                            <h5 class="mt-2">Aniversery celebretion</h5>
                        </a>
                    </li>
                    <li>
                        <div class="timeline-badge bg-warning"></div>
                        <a href="#" class="timeline-panel">
                            <span>After 2 days</span>
                            <h5 class="mt-2">Square AGM catering</h5>
                        </a>
                    </li>
                    <li>
                        <div class="timeline-badge bg-warning"></div>
                        <a href="#" class="timeline-panel">
                            <span>Next saturday</span>
                            <h5 class="mt-2">Wedding party</h5>
                        </a>
                    </li>
                    <li>
                        <div class="timeline-badge bg-danger"></div>
                        <a href="#" class="timeline-panel">
                            <span>After 4 days</span>
                            <h5 class="mt-2">15 person meeting arrangement</h5>
                        </a>
                    </li>
                    <li>
                        <div class="timeline-badge bg-pink"></div>
                        <a href="#" class="timeline-panel">
                            <span>After 5 days</span>
                            <h5 class="mt-2">Birthday celebretion</h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
@endsection

@section('scripts')

    <!-- Calender -->
    <script src="{{asset('assets/plugins/jqueryui/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/fullcalendar/js/fullcalendar.min.js')}}"></script>
    <!-- Datedropper -->
    <script src="{{asset('assets/plugins/datedropper/datedropper.min.js')}}"></script>
    <!-- Timepicki -->
    <script src="{{asset('assets/plugins/timepicki/js/timepicki.js')}}"></script>



    <!-- Init files -->
    <script src="{{asset('js/plugins-init/fullcalendar-init.js')}}"></script>
    <script src="{{asset('js/plugins-init/datedropper-init.js')}}"></script>
    <script src="{{asset('js/plugins-init/timepicki-init.js')}}"></script>
@endsection
