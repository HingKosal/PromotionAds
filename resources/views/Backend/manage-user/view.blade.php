@extends('Backend.layout.master')
@section('content')
    <div>
        <a href="{{route('user')}}" type="button" class="btn btn-primary"> Back </a>
    </div>
            <!-- end page title -->
            <div class="row" style="margin-top: 30px;">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="pl-xl-3 mt-3 mt-xl-0">
                                    <h4 class="mb-3">First Name : {{$users->first_name}}</h4>
                                    <h4 class="mb-3">Last Name : {{$users->last_name}}</h4>
                                    <h4 class="mb-3">Username : {{$users->username}}</h4>
                                    <h4 class="mb-3">E-mail : {{$users->email}}</h4>
                                    <h4 class="mb-3">Password : {{$users->password}}</h4>
                                    <h4 class="mb-3">Create at : {{$users->created_at}}</h4>
                                    <h4 class="mb-3">Update at : {{$users->updated_at}}</h4>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->

@endsection
