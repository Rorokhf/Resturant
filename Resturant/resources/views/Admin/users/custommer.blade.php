

@extends('Admin.layout.app')

@section('title','Custommers')


@section('links')
<!-- Custom Stylesheet -->
<link href="{{asset('assets/plugins/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
@endsection
@section('content')


<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display table-responsive-xl" style="min-width: 845px">
                        <thead>
                                <tr>

                                    <th>Name</th>
                                    <th>number</th>
                                    <th>Email</th>
                                    <th>Adress</th>
                                    <th>status</th>
                                    <th>paid</th>
                                    <th>Operation</th>
                                </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Omar ali</td>
                                <td>012446858</td>
                                <td>omar@gmail.com</td>
                                <td>St 120,alex</td>
                                <td><span class="badge badge-primary">online</span>
                                </td>
                                <td>$320,800</td>
                                <td><a href="" class="btn btn-primary">Edit</a><a href="" class="btn btn-danger">Delete</a> </td>
                            </tr>
                            

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

  <!-- Datatable -->
  <script src="{{asset('assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>

  <!-- Init files -->
  <script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>


@endsection
