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
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label for="inputPassword2" class="sr-only">Search</label>
                                            <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                        </div>
                                        <div class="form-group mx-sm-3">
                                            <label for="status-select" class="mr-2">Sort By</label>
                                            <select class="custom-select" id="status-select">
                                                <option selected="">All</option>
                                                <option value="1">Recent added</option>
                                                <option value="2">Popular</option>
                                                <option value="3">Top promotion</option>
                                            </select>
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
                            <h2>Clothes</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($product as $p)
                    <div class="col-md-6 col-xl-3">
                        <div class="card-box product-box">
                            <div class="bg-light">
                               <a href="{{url('/frontend/detail{id}')}}"><img src="{{asset('Frontend/assets/images/products/clothes/product-9-1.jpg')}}" alt="product-pic" class="img-fluid"></a>
                            </div>

                            <div class="product-info">
                                <div class="row align-items-center">

                                    <div class="col">
                                        <h5 class="font-16 mt-0 sp-line-1"><a href="{{url('/frontend/detail{id}')}}" class="text-dark">{{$p->product_name}}</a> </h5>
                                        <div class="text-warning mb-2 font-13">
                                            <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                            <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                            <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                            <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                            <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        </div>
{{--                                        <h5 class="m-0"> <span class="text-muted"> Stocks : {{$p->price}} pcs</span></h5>--}}
                                    </div>

                                    <div class="col-auto">
                                        <h4 class="text-danger text-uppercase">{{$p->discount}} % Off</h4>
                                    </div>
                                </div> <!-- end row -->
                            </div> <!-- end product info-->
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                    @endforeach
                </div>
                <!-- end row-->
                <div style="display: flex;justify-content: flex-end">
                    {{ $product->links() }}
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h2>Shoes</h2>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card-box product-box">
                        <div class="bg-light">
                            <img src="{{asset('Frontend/assets/images/products/shoes/Black-Converse-Shoes-PNG-HD.png')}}" alt="product-pic" class="img-fluid">
                        </div>

                        <div class="product-info">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">Black-Converse-Shoes</a> </h5>
                                    <div class="text-warning mb-2 font-13">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                    </div>
                                    <h5 class="m-0"> <span class="text-muted"> Stocks : 98 pcs</span></h5>
                                </div>
                                <div class="col-auto">
                                    <h4 class="text-danger text-uppercase">20 % Off</h4>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end product info-->
                    </div> <!-- end card-box-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card-box product-box">
                        <div class="bg-light">
                            <img src="{{asset('Frontend/assets/images/products/shoes/Converse-Shoes-PNG-Background-Image.png')}}" alt="product-pic" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="font-16 mt-0 sp-line-1"><a href="" class="text-dark">Biblio Converse-Shoes</a> </h5>
                                    <div class="text-warning mb-2 font-13">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                    </div>
                                    <h5 class="m-0"> <span class="text-muted"> Stocks : 23 pcs</span></h5>
                                </div>
                                <div class="col-auto">
                                    <h4 class="text-danger text-uppercase">40 % Off</h4>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end product info-->
                    </div> <!-- end card-box-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card-box product-box">
                        <div class="bg-light">
                            <img src="{{asset('Frontend/assets/images/products/shoes/Converse-Shoes-PNG-Picture.png')}}" alt="product-pic" class="img-fluid">
                        </div>

                        <div class="product-info">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">Modern Converse-Shoes</a> </h5>
                                    <div class="text-warning mb-2 font-13">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                    </div>
                                    <h5 class="m-0"> <span class="text-muted"> Stocks : 235 pcs</span></h5>
                                </div>
                                <div class="col-auto">
                                    <h4 class="text-danger text-uppercase">50 % Off</h4>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end product info-->
                    </div> <!-- end card-box-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card-box product-box">
                        <div class="bg-light">
                            <img src="{{asset('Frontend/assets/images/products/shoes/Converse-Shoes-PNG-Transparent.png')}}" alt="product-pic" class="img-fluid">
                        </div>

                        <div class="product-info">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">Designer Converse Awesome</a> </h5>
                                    <div class="text-warning mb-2 font-13">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                    </div>
                                    <h5 class="m-0"> <span class="text-muted"> Stocks : 385 pcs</span></h5>
                                </div>
                                <div class="col-auto">
                                    <h4 class="text-danger text-uppercase">30 % Off</h4>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end product info-->
                    </div> <!-- end card-box-->
                </div> <!-- end col-->
            </div>
            <!-- end row-->

        </div>

        <div class="container-fluid">
            <!-- end row-->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h2>Accessories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card-box product-box">
                        <div class="bg-light">
                            <img src="{{asset('Frontend/assets/images/products/accessories/ADATA-Sync-Charge-Lightning-Cable-Series-Launched-400x400.jpg')}}" alt="product-pic" class="img-fluid">
                        </div>

                        <div class="product-info">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">ADATA-Sync-Charge-Lightning-Cable-Series</a> </h5>
                                    <div class="text-warning mb-2 font-13">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                    </div>
                                    <h5 class="m-0"> <span class="text-muted"> Stocks : 98 pcs</span></h5>
                                </div>
                                <div class="col-auto">
                                    <h4 class="text-danger text-uppercase">20 % Off</h4>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end product info-->
                    </div> <!-- end card-box-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card-box product-box">
                        <div class="bg-light">
                            <img src="{{asset('Frontend/assets/images/products/accessories/20150511143626_514521-200x200.jpg')}}" alt="product-pic" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">Modern Keyboard</a> </h5>
                                    <div class="text-warning mb-2 font-13">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                    </div>
                                    <h5 class="m-0"> <span class="text-muted"> Stocks : 23 pcs</span></h5>
                                </div>
                                <div class="col-auto">
                                    <h4 class="text-danger text-uppercase">40 % Off</h4>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end product info-->
                    </div> <!-- end card-box-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card-box product-box">
                        <div class="bg-light">
                            <img src="{{asset('Frontend/assets/images/products/accessories/c615-gallery-200x200.png')}}" alt="product-pic" class="img-fluid">
                        </div>

                        <div class="product-info">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">c615-gallery</a> </h5>
                                    <div class="text-warning mb-2 font-13">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                    </div>
                                    <h5 class="m-0"> <span class="text-muted"> Stocks : 235 pcs</span></h5>
                                </div>
                                <div class="col-auto">
                                    <h4 class="text-danger text-uppercase">50 % Off</h4>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end product info-->
                    </div> <!-- end card-box-->
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card-box product-box">
                        <div class="bg-light">
                            <img src="{{asset('Frontend/assets/images/products/accessories/dell%20gaming%20backpack-200x200.jpg')}}" alt="product-pic" class="img-fluid">
                        </div>

                        <div class="product-info">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="font-16 mt-0 sp-line-1"><a href="#" class="text-dark">Dell Gaming </a> </h5>
                                    <div class="text-warning mb-2 font-13">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                        <img src="{{asset('Frontend/assets/images/star.png')}}" alt="product-pic" class="img-fluid">
                                    </div>
                                    <h5 class="m-0"> <span class="text-muted"> Stocks : 385 pcs</span></h5>
                                </div>
                                <div class="col-auto">
                                    <h4 class="text-danger text-uppercase">25 % Off</h4>
                                </div>
                            </div> <!-- end row -->
                        </div> <!-- end product info-->
                    </div> <!-- end card-box-->
                </div> <!-- end col-->
            </div>

            <!-- pagination -->
            <div class="row">
                <div class="col-12">
                    <ul class="pagination pagination-rounded justify-content-end mb-3">
                        <li class="page-item">
                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </div> <!-- end col-->
            </div>
            <!-- end row-->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    @endsection
