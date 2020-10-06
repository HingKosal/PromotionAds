@extends('Backend.layout.master')
@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Add New Company</h2>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <form method="POST" action="{{ route('company.store') }}">
                                @csrf
                                <div class="form-body">

                                    {{-- Company name --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Company Name : </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" value="{{old('cname')}}" placeholder="Enter Company Name..." name="company_name">
                                            @error('company_name')
                                            <div class="alert alert-danger">Company already exist!</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Location --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Location : </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('location') is-invalid @enderror" value="{{old('lo_name')}}" placeholder=" Enter the Location..." name="location">
                                        </div>
                                    </div>

                                    {{-- Phone --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Phone: </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" placeholder="Enter Size Name..." name="phone">
                                        </div>
                                    </div>

                                    {{-- Descripiton --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Description : </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('des') is-invalid @enderror" value="{{old('des')}}" placeholder=" Enter the Description..." name="des">
                                        </div>
                                    </div>

                                    {{-- User id --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">User: </label>
                                        <div class="col-md-5">
                                            <select name="user" class="form-control">
                                                <option value="">Please select User</option>
                                                @foreach($User as $users)
                                                <option value="{{$users->id}}">{{$users->username}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <a href="{{url('/company')}}"><i class="ft-x"></i> Cancel</a>
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
