@extends('Backend.layout.master')
@section('content')
    <div>
        <a href="{{route('product')}}" type="button" class="btn btn-primary"> Back </a>
    </div>
            <!-- end page title -->
            <div class="row" style="margin-top: 30px;">
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
                                    <h4 class="mb-3">Product Code : {{$product->id}}</h4>
                                    <h4 class="mb-3">Product Name : {{$product->product_name}}</h4>
                                    <h6 class="text-danger text-uppercase">{{ $product->discount }}% </h6>
                                    <h4 class="mb-4">Old Price : <span class="text-muted mr-2"><del>{{ ($product->price)}}$</del></span> <b>New Price : {{$product->price - ($product->price * $product->discount / 100)}}$</b></h4>
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

@endsection
