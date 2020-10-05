@extends('Backend.layout.master')
@section('content')
<div>
    <a href="{{route('product')}}" type="button" class="btn btn-primary"> Back </a>
</div>
    <section id="horizontal-form-layouts" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h2>Add New Products</h2>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <div class="card-body">
                                <form method="POST" action="{{route('product.store') }}">
                                {{ csrf_field() }}
                                <div class="form-body">

                                    {{-- product name --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Product Namessss: </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('product_name') is-invalid @enderror" placeholder="product name" name="product_namess">
                                        </div>
                                    </div>

                                    {{-- Category id --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Category: </label>
                                        <div class="col-md-5">
                                            <select name="category" class="form-control">
                                                <option value="">Please select Category</option>
                                                @foreach($category as $categories)
                                                <option value="{{$categories->id}}">{{$categories->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Brand id --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Brand: </label>
                                        <div class="col-md-5">
                                            <select name="brand" class="form-control">
                                                <option value="">Please select Brand</option>
                                                @foreach($brand as $brands)
                                                <option value="{{$brands->id}}">{{$brands->brand_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Price --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Pricesssss: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control @error('price') is-invalid @enderror" placeholder=" price" name="price">
                                        </div>
                                    </div>

                                    {{-- Discount --}}
                                    <div class="form-group row">

                                        <label class="col-md-3 label-control" for="projectinput1">Discountsssss: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control @error('discount') is-invalid @enderror" placeholder=" discount" name="discount">
                                        </div>
                                    </div>

                                    {{-- Description --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Descriptionsssss: </label>
                                        <div class="col-md-5">
                                            <textarea name="description" id="projectinput1" cols="67" rows="4"></textarea>
                                        </div>
                                    </div>

                                    {{-- Image --}}
                                    {{-- <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Image: </label>
                                        <div class="col-md-5">
                                            <input type="file" id="projectinput1" class="custom-file-input" name="image">
                                            <label class = "custom-file-label" style="margin-left: 15px; margin-right: 15px;">Choose file</label>
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Image: </label>
                                        <div class="col-md-5">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>

                                    {{-- Size id --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Size: </label>
                                        <div class="col-md-5">
                                            <select name="size" class="form-control">
                                                <option value="">Please select Brand</option>
                                                @foreach($size as $sizes)
                                                <option value="{{$sizes->id}}">{{$sizes->size_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Company id --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Company Name: </label>
                                        <div class="col-md-5">
                                            <select name="company" class="form-control">
                                                <option value="">Please select Brand</option>
                                                @foreach($company as $companies)
                                                <option value="{{$companies->id}}">{{$companies->company_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Location --}}
                                    {{-- <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Location: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control @error('location') is-invalid @enderror" placeholder=" location" name="location">
                                        </div>
                                    </div> --}}

                                    {{-- Phone --}}
                                    {{-- <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Phone: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control @error('phone') is-invalid @enderror" placeholder=" phone" name="phone">
                                        </div>
                                    </div> --}}

                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn-danger">
                                        <a href="{{url('/product')}}"><i class="la la-close"></i>Cancel</a>

                                    </button>
                                    <button type="submit" name="create" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Create
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
