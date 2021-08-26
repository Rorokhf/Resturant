@extends('Admin.layout.app')

@section('title','Calender')

@section('links')
      <!-- Date Dropper -->
      <link rel="stylesheet" href="{{asset('assets/plugins/datedropper/datedropper.min.css')}}">
      <!-- Timepicki -->
      <link rel="stylesheet" href="{{asset('assets/plugins/timepicki/css/timepicki.css')}}">
      <link href="{{asset('css/style.css')}}" rel="stylesheet">
@endsection
@section('content')


<div class="col-xl-12 col-xxl-7">
    <div class="row">
        <div class="col-xl-3 email_left_pane">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-intro-title">Calendar</h4>

                    <div class="">
                        <div id="external-events" class="my-3">
                            <p>Drag and drop your event or click in the calendar</p>
                            <div class="external-event text-dark" data-class="bg-primary"><i class="fa fa-move"></i>New Theme Release</div>
                                <div class="external-event text-dark" data-class="bg-success"><i class="fa fa-move"></i>My Event</div>
                                <div class="external-event text-dark" data-class="bg-warning"><i class="fa fa-move"></i>Meet manager</div>
                                <div class="external-event text-dark" data-class="bg-dark"><i class="fa fa-move"></i>Create New theme</div>
                        </div>
                        <!-- checkbox -->
                        <div class="checkbox checkbox-event pt-3 pb-5">
                            <input id="drop-remove" class="styled-checkbox" type="checkbox">
                            <label class="text-dark" for="drop-remove">Remove After Drop</label>
                        </div>
                        <a href="javascript:void()" data-toggle="modal" data-target="#add-category"
                            class="btn btn-primary btn-event w-100">
                            <span class="align-middle"><i class="ti-plus"></i></span>
                            Create New
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-xxl-12">
            <div class="card">
                <div class="card-body">
                    <div id="calendar" class="app-fullcalendar"></div>
                </div>
            </div>
        </div>
        <!-- BEGIN MODAL -->
        <div class="modal fade none-border" id="event-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>Add New Event</strong></h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect"
                            data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                            event</button>

                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light"
                            data-dismiss="modal">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Add Category -->
        <div class="modal fade none-border" id="add-category">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>Add a category</strong></h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Category Name</label>
                                    <input class="form-control form-white" placeholder="Enter name"
                                        type="text" name="category-name">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label">Choose Category Color</label>
                                    <select class="form-control form-white"
                                        data-placeholder="Choose a color..." name="category-color">
                                        <option value="success">Success</option>
                                        <option value="danger">Danger</option>
                                        <option value="info">Info</option>
                                        <option value="pink">Pink</option>
                                        <option value="primary">Primary</option>
                                        <option value="warning">Warning</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect"
                            data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                            data-dismiss="modal">Save</button>
                    </div>
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
