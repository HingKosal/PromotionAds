@extends('Backend.layout.master')
@section('content')
    <section id="horizontal-form-layouts" style="margin-left: 290px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Update Product</h2>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{route('product.update', $product->id)}}" method="post">
                                <div class="form-body">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1">Product Name: </label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control @error('product_name') is-invalid @enderror" value="{{$product->product_name}}" placeholder="product name" name="product_name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1">Category : </label>
                                            <div class="col-md-5">
                                                <select name="category" class="form-control">
                                                    @foreach($category as $categories)
                                                    <option value="{{$categories->id}}" {{old('id')==$categories->id? 'selected' : ''}}>{{$categories->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1">Brand : </label>
                                            <div class="col-md-5">
                                                <select name="brand" class="form-control">
                                                    @foreach($brand as $brands)
                                                    <option value="{{$brands->id}}" {{old('id')==$brands->id? 'selected' : ''}}>{{$brands->brand_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1">Price: </label>
                                            <div class="col-md-5">
                                                <input type="text" id="projectinput1" class="form-control @error('price') is-invalid @enderror" value="{{$product->price}}" placeholder=" price" name="price">
                                            </div>
                                        </div>

                                        <div class="form-group row">

                                            <label class="col-md-3 label-control" for="projectinput1">Discount: </label>
                                            <div class="col-md-5">
                                                <input type="text" id="projectinput1" class="form-control @error('discount') is-invalid @enderror" value="{{$product->discount}}" placeholder=" discount" name="discount">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1">Description</label>
                                            <div class="col-md-5">
                                                <textarea name="description" id="projectinput1" cols="70" rows="4" value="{{$product->description}}"></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1">Image: </label>
                                            <div class="col-md-5">
                                                <input type="file" id="projectinput1" class="custom-file-input" value="{{$product->image}}" placeholder=" image" name="image">
                                                <label class = "custom-file-label">Choose file</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1">Size : </label>
                                            <div class="col-md-5">
                                                <select name="size" class="form-control">
                                                    @foreach($size as $s)
                                                    <option value="{{$s->id}}" {{old('id')==$s->id? 'selected' : ''}}>{{$s->size_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>




                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1">Company Name: </label>
                                            <div class="col-md-5">
                                                <input type="text" id="projectinput1" class="form-control @error('company_name') is-invalid @enderror" value="{{$product->company_name}}" placeholder=" company name" name="company_name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1">Location: </label>
                                            <div class="col-md-5">
                                                <input type="text" id="projectinput1" class="form-control @error('location') is-invalid @enderror" value="{{$product->location}}" placeholder=" location" name="location">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput1">Phone: </label>
                                            <div class="col-md-5">
                                                <input type="text" id="projectinput1" class="form-control @error('phone') is-invalid @enderror" value="{{$product->phone}}" placeholder=" phone" name="phone">
                                            </div>
                                        </div>


                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <a href="{{url('/product')}}"><i class="ft-x"></i>Cancel</a>
                                    </button>
                                    <button type="submit" name="create" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Update
                                    </button>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
