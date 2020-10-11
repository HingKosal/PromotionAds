@extends('Frontend.layout.master')
@section('content')

    <div class="container-fluid">
        <div id="wrapper">
            <div class="container-fluid">
                <div class="row" style="margin: auto 70px;">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form action="{{route('header.filter')}}" method="get">
                                        <div class="input-group" style="width: 45% !important;">
                                            <input type="search" class="form-control " name="search" placeholder="search..." aria-controls="DataTables_Table_0" >
                                            <span class="input-group-prepend">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end card-box -->
                    </div> <!-- end col-->
                </div>

                <!-- end row-->
                <div class="row" style="margin: auto 70px;">
                    <div class="col-12">
                        <div class="page-title-box">
                                <div class="row">
                                    <div style="width: 100%; padding-left: 10px;">
                                        <h1>Best Promotin Products</h1>
                                    </div>
                                    @foreach($product as $p)
                                             <div class="col-md-6 col-xl-3">
                                                <div class="card-box product-box">
                                                    <div class="bg-light">
                                                    <a href="{{route('detail', $p->id)}}"><img src="{{asset('storage/image/'.$p->image)}}" alt="product-pic" class="img-fluid"></a>
                                                    </div>
                                                    <div class="product-info">
                                                        <div class="row align-items-center">

                                                            <div class="col">
                                                                <h5 class="font-16 mt-0 sp-line-1"><a href="{{url('/frontend/detail')}}" class="text-dark">{{$p->product_name}}</a> </h5>
                                                                <div class="text-warning mb-2 font-13">
                                                                    <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                                                    <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                                                    <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                                                    <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                                                    <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <h4 class="text-danger text-uppercase">{{$p->discount}} % Off</h4>
                                                            </div>
                                                        </div> <!-- end row -->
                                                    </div> <!-- end product info-->
                                                </div> <!-- end card-box-->
                                            </div> <!-- end col-->
                                    @endforeach
                                </div> <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
