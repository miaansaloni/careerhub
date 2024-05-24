@extends('template.base')

@section('title', 'CareerHub - About')

@section('herosection')
<section class="about-section text-center">
    <div class="container">
        <h1 class="display-4">About CareerHub</h1>
        <p class="lead">Your ultimate destination for finding the perfect job</p>
        <p>CareerHub is dedicated to helping you find the job that best fits your skills and career goals. We provide a wide range of job listings from top companies around the world. Our mission is to connect talented individuals with great opportunities and help them achieve their professional dreams.</p>
    </div>
</section>
@endsection

@section('content')
<section class="mission-section text-center">
    <div class="container">
        <h2 class="mb-4">Our Mission</h2>
        <p>At CareerHub, our mission is to empower job seekers by providing them with the tools and resources they need to succeed in their career journeys. We strive to create a seamless and efficient job search experience, ensuring that every candidate can find their perfect match.</p>
    </div>
</section>

<section class="team-section text-center">
    <div class="container">
        <h2 class="mb-5">Meet Our Team</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="team-member">
                    <img src="team1.jpg" alt="Team Member 1" class="img-fluid" style="width: 150px;">
                    <h5 class="mt-3">Alice Johnson</h5>
                    <p>CEO & Founder</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-member">
                    <img src="team2.jpg" alt="Team Member 2" class="img-fluid" style="width: 150px;">
                    <h5 class="mt-3">Bob Smith</h5>
                    <p>Chief Technology Officer</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-member">
                    <img src="team3.jpg" alt="Team Member 3" class="img-fluid" style="width: 150px;">
                    <h5 class="mt-3">Charlie Brown</h5>
                    <p>Head of Marketing</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <h2>Join CareerHub Today</h2>
        <p class="lead">Start your journey to find your dream job with CareerHub. Sign up now and take the first step towards a brighter future.</p>
        <a href="register.html" class="btn btn-secondary btn-lg">Get Started</a>
    </div>
</section>

@endsection
