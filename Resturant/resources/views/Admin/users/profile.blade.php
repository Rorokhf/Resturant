@extends('Admin.layout.app')

@section('links','Profile')

@section('links')

    <!-- Form step -->
    <link href="../../assets/plugins/jquery-steps/css/jquery.steps.css" rel="stylesheet">
    <!-- Dropify -->
    <link rel="stylesheet" href="../../assets/plugins/dropify/dist/css/dropify.min.css">
    <!-- Tagsinput -->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
    <!-- Switchery -->
    <link href="../../assets/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
    <!-- Select 2 -->
    <link rel="stylesheet" href="../../assets/plugins/select2/css/select2.min.css">
    <!-- Touchspinner -->
    <link rel="stylesheet" href="../../assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css">
    <!-- Input mask -->
    <link rel="stylesheet" href="../../assets/plugins/jasny-bootstrap/dist/css/jasny-bootstrap.min.css">
    <!-- x-editable -->
    <link href="../../assets/plugins/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
    <!-- Summernote -->
    <link href="../../assets/plugins/summernote/summernote.css" rel="stylesheet">
    <!-- Daterange picker -->
    <link href="../../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="../../assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="../../assets/plugins/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="../../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="../../assets/plugins/pickadate/themes/default.css">
    <link rel="stylesheet" href="../../assets/plugins/pickadate/themes/default.date.css">

@endsection

@section('content')




<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQF2psCzfbB611rnUhxgMi-lc2oB78ykqDGYb4v83xQ1pAbhPiB&usqp=CAU"><span class="font-weight-bold">Amelly</span></div>
            <div class="col-4">
               
                <input type="file" name="image"><br>



            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" value=""></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>




@endsection

@section('scripts')

    <!-- Jquery Validation -->
    <script src="../../assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form step -->
    <script src="../../assets/plugins/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../../assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="../js/plugins-init/jquery.validate-init.js"></script>
    <!-- Dropify -->
    <script src="../../assets/plugins/dropify/dist/js/dropify.min.js"></script>
    <!-- Typeahead -->
    <script src="../../assets/plugins/typeahead.js/dist/typeahead.jquery.min.js"></script>
    <script src="../../assets/plugins/typeahead.js/dist/typeahead.bundle.min.js"></script>
    <script src="../../assets/plugins/typeahead.js/dist/bloodhound.min.js"></script>
    <!-- Tagsinput -->
    <script src="../../assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
    <!-- Switchery -->
    <script src="../../assets/plugins/innoto-switchery/dist/switchery.min.js"></script>
    <!-- Select 2 -->
    <script src="../../assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- Touchspinner -->
    <script src="../../assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Input mask -->
    <script src="../../assets/plugins/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
    <!-- x-editable -->
    <script src="../../assets/plugins/moment/moment.min.js"></script>
    <script src="../../assets/plugins/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <!-- Summernote -->
    <script src="../../assets/plugins/summernote/js/summernote.min.js"></script>
    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <!-- <script src="../../assets/plugins/moment/moment.min.js"></script> -->
    <script src="../../assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="../../assets/plugins/moment/moment.min.js"></script>
    <script src="../../assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <!-- momment js is must -->
    <!-- <script src="../../assets/plugins/moment/moment.min.js"></script> -->
    <script src="../../assets/plugins/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="../../assets/plugins/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="../../assets/plugins/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <!-- momment js is must -->
    <!-- <script src="../../assets/plugins/moment/moment.min.js"></script> -->
    <script src="../../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="../../assets/plugins/pickadate/picker.js"></script>
    <script src="../../assets/plugins/pickadate/picker.time.js"></script>
    <script src="../../assets/plugins/pickadate/picker.date.js"></script>




    <!-- Form step init -->
    <script src="../js/plugins-init/jquery-steps-init.js"></script>
    <!-- Dropify init -->
    <script src="../js/plugins-init/dropify-init.js"></script>
    <!-- Typeahead init -->
    <script src="../js/plugins-init/typehead.js-init.js"></script>
    <!-- Tagsinput init -->
    <script src="../js/plugins-init/bootstrap-tagsinput-init.js"></script>
    <!-- Switchery init -->
    <script src="../js/plugins-init/switchery-init.js"></script>
    <!-- Select 2 init -->
    <script src="../js/plugins-init/select2-init.js"></script>
    <!-- Touchspinner init -->
    <script src="../js/plugins-init/bootstrap-touchpin-init.js"></script>
    <!-- x-editable init -->
    <script src="../js/plugins-init/bootstrap-editable-init.js"></script>
    <!-- Summernote init -->
    <script src="../js/plugins-init/summernote-init.js"></script>
    <!-- Daterangepicker -->
    <script src="../js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="../js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="../js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="../js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="../js/plugins-init/pickadate-init.js"></script>

@endsection
