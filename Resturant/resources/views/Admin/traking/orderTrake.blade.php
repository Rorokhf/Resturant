@extends('Admin.layout.app')

@section('title','order traking')


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
                                    <th scope="col">ID</th>
                                    <th scope="col">Order Name</th>
                                    <th scope="col">Custommer Name</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Delivery time</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>54565</td>
                                <td>Fresh Crostini</td>
                                <td>Adam Smith</td>
                                <td>Gulshan</td>
                                <td>10:20</td>
                                <td>5</td>
                                <td>$34</td>
                                <td><span class="badge badge-xs badge-primary">Pending</span>
                                </td>
                                <td>
                                    <form method="post" action="">
                                        @csrf
                                        {{-- @method('DELETE') --}}
                                        <a class="btn btn-outline-warning" href="">Edit</a>

                                        <button type="submit" class="btn btn-outline-danger"> Delete </button>
                                    </form>
                                </td>
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
