@extends('Backend.layout.master')
@section('content')
<div>
    <a href="{{route('company')}}" type="button" class="btn btn-primary"> Back </a>
</div>
<table id="datatable" class="table table-striped table-bordered dom-jQuery-events dataTable" role="grid" aria-describedby="DataTables_Table_0_info">
    <thead>

        <table class="table table-striped table-bordered dom-jQuery-events dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" >
            <thead>
            <tr style="width: 100%">
                <th>Compnay Name</th>
                <th>Location</th>
                <th>Phone</th>
                <th>Description</th>
                <th>UserID</th>
                 <th>Action</th>
            </tr>
            </thead>
    <tbody>
    
    
    @foreach ($company as $p)
    <tr>
       
        <td>{{$p->id}}</td>
        <td>{{$p->company_name}}</td>
        <td>{{$p->location}}</td>
        <td>{{$p->phone}}</td>
        <td>{{$p->description}}</td>
        <td>{{$p->user_id}}</td>
        <td> 
            <a class ="btn btn-sm btn-primary" href ="{{route('company.edit', $p->id)}}">
                <i class='la la-pencil'></i></a>
            <a class ="btn btn-sm btn-success" href ="{{route('company.show', $p->id)}}">
                <i class='la la-eye'></i></a>
            <a class ="btn btn-sm btn-danger"  onclick="return confirm('Are you sure to delete?')" href ="{{route('company.delete', $p->id)}}">
                <i class='la la-trash-o'></i></a>

        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection