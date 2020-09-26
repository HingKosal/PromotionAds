@extends('Backend.layout.master')
@section('content')
        <div class="content-body">
            <!-- DOM - jQuery events table -->
            <section id="dom">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                             <h1>Promotion List</h1>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                        <div class="row" style="display: flex;justify-content: space-between;margin: 10px 0">
                                            <div>
                                                <a href="{{route('product.create')}}" type="button" class="btn btn-primary"> Add New </a>
                                            </div>
                                            <div style="display: flex">
                                                <label>Search:</label><input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="datatable" class="table table-striped table-bordered dom-jQuery-events dataTable" role="grid" aria-describedby="DataTables_Table_0_info">
                                                    <thead>

                                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 158.6px;">Product ID</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 600px;">Product Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 119.4px;">Price</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 45px;">Discount</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 101.8px;">Category</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 1500px;">Action</th></tr>
                                                    </thead>
                                                    <tbody>
                                                    
                                                    <?php $no=1; ?>
                                                    @foreach ($product as $p)
                                                    <tr>
                                                        <td>{{$no++}}</td>
                                                        <td>{{$p->product_name}}</td>
                                                        <td>{{$p->price}}</td>
                                                        <td>{{$p->discount}}</td>
                                                        <td>{{$p->category_id}}</td>
                                                        <td> 
                                                            <a class ="btn btn-sm btn-primary" href ="{{route('product.edit', $p->promotion_id)}}">
                                                                <i class='la la-pencil'></i></a>
                                                            <a class ="btn btn-sm btn-success" href ="{{route('product.details', $p->promotion_id)}}">
                                                                <i class='la la-eye'></i></a>
                                                            <a class ="btn btn-sm btn-danger" href ="{{route('product.delete', $p->promotion_id)}}">
                                                                <i class='la la-trash-o'></i></a>

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

    @section('scripts')
    <script>
        $(document).ready( function () {
        $('#datatable').DataTable();
        });
    </script>
    @endsection