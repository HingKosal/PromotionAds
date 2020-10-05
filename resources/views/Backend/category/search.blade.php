@extends('Backend.layout.master')
@section('content')
<div>
    <a href="{{route('category')}}" type="button" class="btn btn-primary"> Back </a>
</div>
<table id="datatable" class="table table-striped table-bordered dom-jQuery-events dataTable" role="grid" aria-describedby="DataTables_Table_0_info">
    <thead>

        <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" >
            <thead>
            <tr style="width: 100%">
                <th>Category ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
    <tbody>
    
    
    @foreach ($category as $p)
    <tr>
       
        <td>{{$p->id}}</td>
        <td>{{$p->title}}</td>
        <td>{{$p->description}}</td>
        <td> 
            <a class ="btn btn-sm btn-primary" href ="{{route('category.edit', $p->id)}}">
                <i class='la la-pencil'></i></a>
            <a class ="btn btn-sm btn-success" href ="{{route('category.show', $p->id)}}">
                <i class='la la-eye'></i></a>
            <a class ="btn btn-sm btn-danger"  onclick="return confirm('Are you sure to delete?')" href ="{{route('category.delete', $p->id)}}">
                <i class='la la-trash-o'></i></a>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection