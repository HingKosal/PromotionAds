@extends('Frontend.layout.master')
@section('content')
    <div class="container">
        <div class="content">
            <div class="wrapper">
                <div class="main">
                    <h1 class="text-success">CONTACT US</h1>
                    <p>Feel free to contact us at any time and we will reply as soon as posible.</p>
                    <p>We are welcome to serve you!</p>
                    <div class="contact">
                        <div class="email">
                            <h4 class="text-info"><i class='far fa-envelope' > Business Email</i></h4>
                            <button class="btn-primary">promotionads2020@gmail.com/kh</button>
                        </div>
                        <div class="phone">
                            <h4 class="text-info"><i class='fas fa-phone'> Business Number</i></h4>
                            <button class="btn-danger">(855+) 88 789 987</button>
                        </div>
                        <div class="social">
                            <h4 class="text-info"><i class='far fa-user-circle'> Business Social Media</i></h4>
                            <div class="social-icon">
                                <img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/>
                                <img src="https://img.icons8.com/fluent/48/000000/twitter.png"/>
                                <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="message">
                    <h2 class="text-success">Leave Message</h2>
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form method="post" action="{{route('contact.store')}}">
                        @csrf
                        <div class="form-group">
                            <label class="text-info" for="name">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" placeholder="Your name.....">

                        </div>
                        <div class="form-group">
                            <label class="text-info" for="email">E-mail</label>
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" placeholder="Your E-mail....." >
                        </div>
                        <div class="form-group">
                            <label class="text-info" for="message">Message</label>
                            <textarea class="text-info" name="message" class="form-control @error('message') is-invalid @enderror" value="{{old('message')}}" placeholder="your message....." cols="30" rows="4"></textarea>

                        </div>
                        <button class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
