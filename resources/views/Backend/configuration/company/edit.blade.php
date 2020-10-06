@extends('Backend.layout.master')
@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Update Company</h2>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <form method="GET" action="{{route('company.update',$companies->id)}}">
                                @csrf
                                <div class="form-body">

                                    {{-- Company Name --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Company Name : </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" value="{{$companies->company_name}}" placeholder="Enter the company Name..." name="company_name">
                                        </div>
                                    </div>

                                    {{-- Location --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Location: </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('location') is-invalid @enderror" value="{{$companies->location}}" placeholder=" Enter the Description..." name="location">
                                        </div>
                                    </div>

                                    {{-- Phone --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1"> Phone: </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{$companies->phone}}" placeholder="Enter the company Name..." name="phone">
                                        </div>
                                    </div>

                                    {{-- Description --}}
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">Description: </label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control @error('des') is-invalid @enderror" value="{{$companies->description}}" placeholder=" Enter the Description..." name="des">
                                        </div>
                                    </div>

                                     {{-- User id --}}
                                     <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput1">User: </label>
                                        <div class="col-md-5">
                                            <select name="user" class="form-control">
                                                @foreach($User1 as $users1)
                                                <option value="{{$users1->id}}">{{$users1->username}}</option>
                                                @endforeach
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
