@extends('Frontend.layout.master')
@section('content')
    <div class="container">
        <div class="content">
            <div class="main">
                <h2 class="text-success">Contact Us</h2>
                <p>Feel free to contact us at any time and we will reply as soon as posible.</p>
                <p>We are welcome to serve you!</p>
            </div>
            <hr>
            <div class="contact">
                <h4 class="text-info"><i class='far fa-envelope' > Business Email</i></h4>
                <button class="btn-primary">promotionads2020@gmail.com/kh</button>
                <br>
                <h4 class="text-info"><i class='fas fa-phone'> Business Number</i></h4>
                <button class="btn-danger">(855+) 88 789 987</button>
                <br>
                <h4 class="text-info"><i class='far fa-user-circle'> Business Social Media</i></h4>
                <div class="social-icon">
                    <img src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/>
                    <img src="https://img.icons8.com/fluent/48/000000/twitter.png"/>
                    <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/>
                </div>
            </div>
            <div class="message">
                <h2 class="text-success">Leave Us A Message</h2>
                <form method="post" action="#">
                    <div class="form-group">
                        <label class="text-info" for="name">Full Name:</label>
                        <input type="text" class="form-control" name="name" value="" placeholder="enter your full name....." require>

                    </div>
                    <div class="form-group">
                        <label class="text-info" for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="enter your email....." require>
                    </div>
                    <div class="form-group">
                        <label class="text-info" for="message">Message</label>
                        <textarea class="text-info" name="message" class="form-control" placeholder="tell us your interest/any issue....." cols="30" rows="4" require></textarea>

                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
