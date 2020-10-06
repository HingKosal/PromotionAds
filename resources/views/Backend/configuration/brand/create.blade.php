@extends('Backend.layout.master')
@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Brands</h2>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <form method="POST" action="{{ route('brand.store') }}">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Brand Name: </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('brand_name') is-invalid @enderror" value="{{old('brand_name')}}" placeholder="Enter the Title..." name="brand_name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Description: </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" placeholder=" Enter the Description..." name="des">

                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <a href="{{url('/brand')}}"><i class="ft-x"></i> Cancel</a>
                                    </button>
                                    <button type="submit" name="create" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> Create
                                    </button>
                                </div>


                                <script>
                                    var password = document.getElementById("password")
                                        , password_confirmation = document.getElementById("password_confirmation");

                                    function validatePassword(){
                                        if(password.value != password_confirmation.value) {
                                            password_confirmation.setCustomValidity("confirm password not match with password");
                                        }  else{
                                            password_confirmation.setCustomValidity('');
                                        }
                                    }
                                    password.onchange = validatePassword;
                                    password_confirmation.onkeyup = validatePassword;
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
