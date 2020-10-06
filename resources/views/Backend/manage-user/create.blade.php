@extends('Backend.layout.master')
@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New User</h2>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <form method="POST" action="{{ route('user.store') }}">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">First Name : </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('fname') is-invalid @enderror" value="{{old('fname')}}" placeholder="Enter First Name..." name="fname">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Last Name : </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('lname') is-invalid @enderror" value="{{old('lname')}}" placeholder=" Enter Last Name..." name="lname">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Username :</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{old('username')}}" placeholder=" Enter Username..." name="username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">E-mail :</label>
                                        <div class="col-md-5">
                                            @error('email')
                                            <div class="alert alert-danger">email must be unique</div>
                                            @enderror
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder=" Enter E-mail..." name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Password :</label>
                                        <div class="col-md-5">
                                            @error('password')
                                                <div class="alert alert-danger">Password must be at least 8 characters </div>
                                            @enderror
                                            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" placeholder=" Enter Password..." name="password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Password Confirmation :</label>
                                        <div class="col-md-5">
                                            <input type="password" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder=" Enter Password Confirmation..." name="password_confirmation">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <a href="{{url('/user')}}"><i class="ft-x"></i> Cancel</a>
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
