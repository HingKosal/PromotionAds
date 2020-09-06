@extends('Backend.layout.master')
@section('content')
    <section id="horizontal-form-layouts" style="margin-left: 290px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Category</h2>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <form class="form form-horizontal" action="createcategory.php" novalidate method="post">
                                <div class="form-body">
                                    <!--                                <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>-->
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Category ID: </label>
                                        <div class="col-md-5">
                                            <input type="text" id="projectinput1" class="form-control" placeholder="category id" name="category_id">

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
                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <a href="{{url('/category')}}"><i class="ft-x"></i> Cancel</a>
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
