@extends('layouts.frontend')

@section('content')

    <div class="inner_content">
        <div class="content_middel">
            <h1>Comming Soon</h1>
            <h3>Stay Tuned</h3>
            <p>WE ARE WORKING HARD TO GIVE YOU A BETTER EXPERIENCE.</p>
            <div class="form">
                <form action="{{route('frontend.subscribe')}}" method="POST">
                    @csrf
                    <input type="email" placeholder="Enter Your Email Address" name="email_subscribe" value="{{old('email')}}">
                    <input type="submit" value="subscribe">
                    @error('email_subscribe')<span class="text-danger text-sm-start">{{$message}}</span>@enderror
                </form>
                <p>GET subscribe WHEN WE GO LIVE</p>
            </div>
            <div class="social_area">
                <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=100092715068456&mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/Lanerm_Beauty"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/lanerm-beauty/"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/lanerm_beauty/?igshid=MmJiY2I4NDBkZg%3D%3D&fbclid=IwAR0h2dExSt0HXMBBIBl716GOE0Akdm7Fo0LeGS5UH1TkcGOVY-Xui02"><i class="fab fa-instagram"></i></a></li>

                </ul>
            </div>
        </div>
    </div>

@endsection
