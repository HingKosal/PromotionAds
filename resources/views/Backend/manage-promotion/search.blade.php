@extends('Backend.layout.master')
@section('content')
<div>
    <a href="{{route('product')}}" type="button" class="btn btn-primary"> Back </a>
</div>
<table id="datatable" class="table table-striped table-bordered dom-jQuery-events dataTable" role="grid" aria-describedby="DataTables_Table_0_info">
    <thead>

        <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" >
            <thead>
            <tr style="width: 100%">
                <th>Promotion ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            </thead>
    <tbody>
    
    
    @foreach ($product as $p)
    <tr>
       
        <td>{{$p->id}}</td>
        <td>{{$p->product_name}}</td>
        <td>{{$p->price}}</td>
        <td>{{$p->discount}}</td>
        <td>{{$p->category_id}}</td>
        <td> 
            <a class ="btn btn-sm btn-primary" href ="{{route('product.edit', $p->id)}}">
                <i class='la la-pencil'></i></a>
            <a class ="btn btn-sm btn-success" href ="{{route('product.show', $p->id)}}">
                <i class='la la-eye'></i></a>
            <a class ="btn btn-sm btn-danger"  onclick="return confirm('Are you sure to delete?')" href ="{{route('product.delete', $p->id)}}">
                <i class='la la-trash-o'></i></a>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection