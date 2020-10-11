@extends('Frontend.layout.master')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Product Detail</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-5">

                            <div class="tab-content pt-0">
                                <div class="tab-pane active show" id="product-1-item">
                                    <img src="{{asset('storage/image/'.$product->image)}}" alt="" title="" class="img-fluid mx-auto d-block rounded">
                                </div>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-lg-7">
                            <div class="pl-xl-3 mt-3 mt-xl-0">
                                <a href="#" class="text-primary">
                                    @foreach ($brand as $b)
                                    @if ($product->brand_id == $b->id)
                                        {{$b->brand_name}}
                                    @endif
                                @endforeach</a>
                                <h4 class="mb-3">{{$product->product_name}}</h4>
                                <p class="text-muted float-left mr-3">
                                    <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                    <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                    <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                    <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                    <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                </p>
                                <p class="mb-4"><a href="#" class="text-muted">( 36 Customer Reviews )</a></p>
                                <h6 class="text-danger text-uppercase">{{ $product->discount }}% </h6>
                                <h4 class="mb-4">Price : <span class="text-muted mr-2"><del>{{ ($product->price)}}$</del></span> <b>{{$product->price - ($product->price * $product->discount / 100)}}$</b></h4>
                                <h4><span class="badge bg-soft-success text-success mb-4">Instock</span></h4>
                                <p class="text-muted mb-4">{{$product->description}}</p>
                                <form class="form-inline mb-4">
                                    <label class="my-1 mr-2 text-muted" for="sizeinput">Size :
                                        @foreach ($size as $s)
                                        @if ($product->size_id == $s->id)
                                            {{$s->size_name}}
                                        @endif
                                        @endforeach
                                    </label>
                                </form>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div>
                                            <p class="text-muted"> Brand :
                                                @foreach ($brand as $b)
                                                    @if ($product->brand_id == $b->id)
                                                        {{$b->brand_name}}
                                                    @endif
                                                @endforeach
                                            </p>
                                            @foreach ($company as $com)
                                                @if ($product->company_id == $com->id)
                                                    <p class="text-muted"> Company Name :{{$com->company_name}}</p>
                                                    <p class="text-muted">Company Address : {{$com->location}}</p>
                                                    <p class="text-muted">Phone : {{$com->phone}}</p>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

    </div>


@endsection
