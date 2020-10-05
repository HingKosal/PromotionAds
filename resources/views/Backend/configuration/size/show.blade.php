@extends('Backend.layout.master')
@section('content')
<div>
    <a href="{{route('category')}}" type="button" class="btn btn-primary"> Back </a>
</div>
<div class="card-header">
    <h2>Category Detail</h2>
    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category Name:</strong>
            {{ $category->title}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            {{ $category->description}}
        </div>
    </div>   
</div>

@endsection