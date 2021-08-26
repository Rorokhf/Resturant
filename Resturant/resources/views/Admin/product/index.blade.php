
@extends('Admin.layout.app')

@section('title','All products')


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
                                    <th>code</th>
                                    <th>catigory</th>
                                    <th>sub-catigory</th>
                                    <th>status</th>
                                    <th>price</th>
                                    <th>action</th>
                                </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>chicken with rice</td>
                                    <td>540</td>
                                    <td>meels</td>
                                    <td>lunch</td>
                                    <td><span class="badge badge-primary">offers</span>
                                    </td>
                                    <td>$320,800</td>
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
