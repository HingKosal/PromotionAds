@section('style')
    <link rel="stylesheet" href="{{asset('jquery.datetimepicker.min.css')}}">
@endsection

@extends('Backend.layout.master')
@section('content')

        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard" style="padding-top:10px; padding-bottom:10px">
                                    <div class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <h1>Manage User</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row" style="display: flex;justify-content: space-between;margin: 10px 0">
                                            <div>
                                                <a href="{{route('user.create')}}" type="button" class="btn btn-primary"> Add New </a>
                                            </div>
                                            <div class="col-md-4">
                                                <form action="{{route('user.filter')}}" method="post">
                                                    {{csrf_field()}}
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="filter" autocomplete="off" name="from_date" placeholder="From Date" aria-controls="DataTables_Table_0" required>
                                                        <input type="text" class="form-control" id="filter1" autocomplete="off"  name="to_date" placeholder="To Date" aria-controls="DataTables_Table_0" required>
                                                        <span class="input-group-prepend">
                                                        <button type="submit" class="btn btn-primary">Filter</button>
                                                    </span>
                                                    </div>
                                                </form>
                                            </div>
                                            <a class="btn btn-secondary" href="{{route('user')}}">Clear</a>
                                            <div class="col-md-4">
                                                <form action="{{route('user.search')}}" method="post">
                                                    {{csrf_field()}}
                                                    <div class="input-group">
                                                        <input type="search" class="form-control " name="search" placeholder="" aria-controls="DataTables_Table_0">
                                                        <span class="input-group-prepend">
                                                        <button type="submit" class="btn btn-primary">Search</button>
                                                    </span>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" >
                                                    <thead>
                                                    <tr style="width: 100%">
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                        <th>E-mail</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($user as $u)
                                                        <tr>
                                                            <td>{{$u->id}}</td>
                                                            <td>{{$u->first_name}}</td>
                                                            <td>{{$u->last_name}}</td>
                                                            <td>{{$u->username}}</td>
                                                            <td>{{$u->email}}</td>
                                                            <td>
                                                                <a class="btn btn-warning btn-sm" href="{{route('password.request')}}" role="button">reset password</a>
                                                                <a class="btn btn-primary btn-sm" href="{{route('user.edit',$u->id)}}" role="button"><i class='la la-pencil'></i></a>
                                                                <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="{{route('user.delete',$u->id)}}" role="button"><i class='la la-trash-o'></i></a>
                                                                <a class="btn btn-secondary btn-sm" href="{{route('user.view', $u->id)}}" role="button"><i class='la la-eye'></i></a>
                                                            </td>
                                                        </tr>

                                                        @endforeach
                                                    </tbody>
                                                </table>

                                                <div class="export" style="display: flex;">
                                                    <form action="{{route('user.pdf')}}" method="post">
                                                        {{csrf_field()}}
                                                        @foreach($user as $item)
                                                            <input type="hidden" value="{{$item->id}}" name="search_id[]">
                                                        @endforeach
                                                        <button type="submit" class="btn btn-secondary btn-sm" >export PDF</button>

                                                    </form>
                                                    <div class="gap" style="margin: 0 10px;"></div>
                                                    <form action="{{route('user.excel')}}" method="post">
                                                        {{csrf_field()}}
                                                        @foreach($user as $excel)
                                                            <input type="hidden" value="{{$excel->id}}" name="excel[]">
                                                        @endforeach
                                                        <button type="submit" class="btn btn-secondary btn-sm" >export Excel</button>
                                                    </form>
                                                </div>

                                                <div style="display: flex; justify-content: flex-end">
                                                    {{$user->links()}}
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    @endsection
@section('scripts')
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{asset('jquery.datetimepicker.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#filter').datetimepicker({
                format: "Y-m-d"
            });
            $('#filter1').datetimepicker({
                format: "Y-m-d",
            });
        });

    </script>
@endsection



