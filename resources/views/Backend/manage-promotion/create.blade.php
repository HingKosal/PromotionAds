@extends('Backend.layout.master')
@section('content')
    <section id="horizontal-form-layouts" style="margin-left: 290px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Product</h2>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <form class="form form-horizontal" action="index.blade.php" novalidate method="post">
                                <div class="form-body">

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Product Name: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control" placeholder="product name" name="product_name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Category: </label>
                                        <select class="custom-select col-md-2" id="" style="margin-left:15px;" name="category_id">
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Brand: </label>
                                        <select class="custom-select col-md-2" id="" style="margin-left:15px;" name="brand_id">
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Price: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control" placeholder=" price" name="price">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Category ID: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control" placeholder="category id" name="category_id">
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <label class="col-md-3 label-control" for="projectinput1">Discount: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control" placeholder=" discount" name="discount">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Title: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control" placeholder=" title" name="title">

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Description</label>
                                        <div class="col-md-5">
                                            <textarea name="description" id="projectinput1" cols="70" rows="4"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Image: </label>
                                        <div class="col-md-5">
                                            <input type="file" id="projectinput1" class="custom-file-input" placeholder=" image" name="image">
                                            <label class = "custom-file-label">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Size: </label>
                                        <select class="custom-select col-md-2" id="" style="margin-left:15px;" name="size_id">
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Company Name: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control" placeholder=" company name" name="company_name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Location: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control" placeholder=" location" name="location">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Phone: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control" placeholder=" phone" name="phone">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn-danger">
                                        <a href="{{url('/product')}}"><i class="la la-close"></i> Cancel</a>

                                    </button>
                                    <button type="submit" name="create" class="btn btn-primary">
                                        <a href="{{url('/product')}}"><i class="la la-check-square-o"></i> Create</a>
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
