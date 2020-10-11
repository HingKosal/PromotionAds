@extends('Frontend.layout.master')
@section('content')
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('Frontend/assets/images/12_Business-Banner.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('Frontend/assets/images/coverpageproject.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('Frontend/assets/images/cover page project.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form action="{{route('filter')}}" method="get">
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
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            @foreach ($category as $c)
                               <h2>{{$c->title}}</h2>
                                <div class="row">
                                    @foreach($product as $p)
                                        @if ($c->id == $p->category_id)
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
                                        @endif
                                    @endforeach
                                </div> <!-- end row -->
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- <div style="display: flex;justify-content: flex-end">
                    {{$product->links()}}
                </div> --}}
            </div>
        </div>


        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    @endsection
