@extends('Backend.layout.master')
@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Update User</h2>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <form method="GET" action="{{route('user.update',$users->id)}}">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">First Name : </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('fname') is-invalid @enderror" value="{{$users->first_name}}" placeholder="Enter First Name..." name="fname">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Last Name : </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('lname') is-invalid @enderror" value="{{$users->last_name}}" placeholder=" Enter Last Name..." name="lname">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Username :</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{$users->username}}" placeholder=" Enter Username..." name="username">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">E-mail :</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{$users->email}}" placeholder=" Enter E-mail..." name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <a href="{{url('/user')}}"><i class="ft-x"></i> Cancel</a>
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
