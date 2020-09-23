@extends('Backend.layout.master')
@section('content')
        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row" style="display: flex;justify-content: space-between;margin: 10px 0">
{{--                                            <div>--}}
{{--                                                <a href="{{route('user.create')}}" type="button" class="btn btn-primary"> Add New </a>--}}
{{--                                            </div>--}}
                                            <div style="display: flex">
                                                <label>Search:</label><input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
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
                                                        <th style="width: 50%">Password</th>
                                                        <th>Password Confirmation</th>
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
                                                            <td>{{$u->password}}</td>
                                                            <td>{{$u->password_confirmation}}</td>
                                                            <td>
                                                                <a class="btn btn-primary btn-sm" href="{{route('edit',$u->id)}}" role="button">edit</a>
                                                                <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')" href="{{route('delete',$u->id)}}" role="button">delete</a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
