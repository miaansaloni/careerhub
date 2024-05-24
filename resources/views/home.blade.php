@extends('template.base')

@section('title', 'CareerHub - Homepage')


@section('herosection')
<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-4">Welcome to CareerHub</h1>
        <p class="lead">Find your dream job with us</p>
        <form class="form-inline justify-content-center mt-4">
            <input class="form-control " type="search" placeholder="Search for jobs..." aria-label="Search">
            <button class="btn btn-secondary my-2 " type="submit">Search</button>
        </form>
    </div>
</section>
@endsection

@section('content')

{{-- STATIC HOMEPAGE --}}
    <section class="featured-jobs-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Featured Jobs</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="job1.jpg" class="card-img-top" alt="Job 1">
                        <div class="card-body">
                            <h5 class="card-title">Software Engineer</h5>
                            <p class="card-text">Join our team as a software engineer and work on exciting projects.</p>
                            <a href="#" class="btn btn-primary">View Job</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="job2.jpg" class="card-img-top" alt="Job 2">
                        <div class="card-body">
                            <h5 class="card-title">Product Manager</h5>
                            <p class="card-text">Lead product development and work with cross-functional teams.</p>
                            <a href="#" class="btn btn-primary">View Job</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="job3.jpg" class="card-img-top" alt="Job 3">
                        <div class="card-body">
                            <h5 class="card-title">Data Scientist</h5>
                            <p class="card-text">Analyze data and provide insights to help drive business decisions.</p>
                            <a href="#" class="btn btn-primary">View Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="categories-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Browse by Categories</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Engineering</h5>
                            <a href="#" class="btn btn-outline-primary">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Marketing</h5>
                            <a href="#" class="btn btn-outline-primary">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Design</h5>
                            <a href="#" class="btn btn-outline-primary">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sales</h5>
                            <a href="#" class="btn btn-outline-primary">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonials-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Users Say</h2>
            <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8">
                                <div class="testimonial text-center">
                                    <p class="testimonial-text">"CareerHub helped me find my dream job! The process was easy and efficient."</p>
                                    <p class="testimonial-author">- John Doe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8">
                                <div class="testimonial text-center">
                                    <p class="testimonial-text">"I was able to explore various job categories and find the perfect fit for me."</p>
                                    <p class="testimonial-author">- Jane Smith</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8">
                                <div class="testimonial text-center">
                                    <p class="testimonial-text">"The user interface is very intuitive and the job recommendations were spot on."</p>
                                    <p class="testimonial-author">- Mike Johnson</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Start Your Career?</h2>
            <p class="lead">Join CareerHub and get started on your job search today</p>
            <a href="register.html" class="btn btn-secondary btn-lg">Get Started</a>
        </div>
    </section>
@endsection



