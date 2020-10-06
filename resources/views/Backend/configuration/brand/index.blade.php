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
                                        <h1>Manage Brands</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row" style="display: flex;justify-content: space-between;margin: 10px 0">
                                            <div>
                                                <a href="{{route('brand.create')}}" type="button" class="btn btn-primary"> Add New </a>
                                            </div>
                                            <div class="col-md-4">
                                                <form action="{{route('brand.search')}}" method="get">
                                                    <div class="input-group">
                                                    <input type="search" class="form-control " name="search" placeholder="" aria-controls="DataTables_Table_0">
                                                    <span class="input-group-prepend">
                                                        <button type="submit" class="btn btn-primary">Search</button>
                                                    </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        @if ($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{ $message }}</p>
                                            </div>
                                        @endif


                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="datatable" class="table table-striped table-bordered dom-jQuery-events dataTable" role="grid" aria-describedby="DataTables_Table_0_info">
                                                    <thead>

                                                        <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" >
                                                            <thead>
                                                            <tr style="width: 100%">
                                                                <th>Brand ID</th>
                                                                <th>Name</th>
                                                                <th>Description</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                    <tbody>


                                                    @foreach ($brand as $p)
                                                    <tr>

                                                        <td>{{$p->id}}</td>
                                                        <td>{{$p->brand_name}}</td>
                                                        <td>{{$p->description}}</td>

                                                        <td>
                                                            <a class ="btn btn-sm btn-primary" href ="{{route('brand.edit', $p->id)}}">
                                                                <i class='la la-pencil'></i></a>

                                                            <a class ="btn btn-sm btn-danger"  onclick="return confirm('Are you sure to delete?')" href ="{{route('brand.delete', $p->id)}}">
                                                                <i class='la la-trash-o'></i></a>

                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                                <div style="margin-left:40%; margin-right:60%;">
                                                    {{$brand->links()}}
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
