@extends('Backend.layout.master')
@section('content')
    <section id="horizontal-form-layouts" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        <h2>Update Promotion Product</h2>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <div class="card-body">
                                <form method="GET" action="{{route('product.update', $product->id)}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-body">

                                    {{-- product name --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Product Name: </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('product_name') is-invalid @enderror" value="{{$product->product_name}}" placeholder="product name" name="product_name">
                                        </div>
                                    </div>

                                    {{-- Category id --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Category: </label>
                                        <div class="col-md-5">
                                            <select name="category" class="form-control">

                                                {{-- Current Category --}}
                                                @foreach ($category as $categories1)
                                                   @if ($product->category_id == $categories1->id)
                                                       <option value="{{$product->category_id}}">{{$categories1->title}}</option>
                                                   @endif
                                                @endforeach

                                                {{-- Update Category --}}
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
                                                {{-- Current Brand id --}}
                                                @foreach ($brand as $brands1)
                                                   @if ($product->brand_id == $brands1->id)
                                                       <option value="{{$product->brand_id}}">{{$brands1->brand_name}}</option>
                                                   @endif
                                                @endforeach

                                                @foreach($brand as $brands)
                                                <option value="{{$brands->id}}">{{$brands->brand_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- Price --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Price: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control @error('price') is-invalid @enderror" value="{{$product->price}}" placeholder=" price" name="price">
                                        </div>
                                    </div>

                                    {{-- Discount --}}
                                    <div class="form-group row">

                                        <label class="col-md-3 label-control" for="projectinput1">Discount: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control @error('discount') is-invalid @enderror" value="{{$product->discount}}"placeholder=" discount" name="discount">
                                        </div>
                                    </div>

                                    {{-- Description --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Description: </label>
                                        <div class="col-md-5">
                                        <textarea name="description" id="projectinput1" style="width: 100%" rows="4" >
                                            {{ old('description', $product->description) }}
                                        </textarea>
                                        </div>
                                    </div>

                                    {{-- Image --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Image: </label>
                                        <div style="margin-left: 15px;width: 300px; height: 300px; border:1px solid; text-align: center;">
                                            <img src="{{asset('storage/image/'.$product->image)}}" alt="No Image Post" height="100%">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Upload New Image: </label>
                                        <div class="col-md-5">
                                            <input type="file" name="image" class="form-control" place>
                                        </div>
                                    </div>

                                    {{-- Size id --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Size: </label>
                                        <div class="col-md-5">
                                            <select name="size" class="form-control">

                                                {{-- Current size --}}
                                                @foreach ($size as $sizes1)
                                                   @if ($product->size_id == $sizes1->id)
                                                       <option value="{{$product->size_id}}">{{$sizes1->size_name}}</option>
                                                   @endif
                                                @endforeach

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

                                                {{-- Current Company --}}
                                                @foreach ($company as $companies1)
                                                   @if ($product->company_id == $companies1->id)
                                                       <option value="{{$product->company_id}}">{{$companies1->company_name}}</option>
                                                   @endif
                                                @endforeach

                                                @foreach($company as $companies)
                                                <option value="{{$companies->id}}">{{$companies->company_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn-danger">
                                        <a href="{{url('/product')}}"><i class="la la-close"></i>Cancel</a>

                                    </button>
                                    <button type="submit" name="create" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Update
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
