<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'CareerHub')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer>
    </script>
        {{-- <link rel="stylesheet" href="{{asset('public/build/assets/app-DaN8u4V-.css')}}"> --}}
        <style>
            .hero-section {
                background: #007bff;
                color: white;
                padding: 5rem 0;
            }
            .featured-jobs-section .card {
                height: 100%;
            }
            .categories-section .card {
                height: 100%;
                text-align: center;
            }
            .cta-section {
                background: #007bff;
                color: white;
                padding: 5rem 0;
                text-align: center;
            }
            .testimonial {
                background: #f8f9fa;
                padding: 2rem;
                border-radius: 0.5rem;
            }
            .testimonial-text {
                font-size: 1.25rem;
            }
            .testimonial-author {
                font-size: 1rem;
                font-weight: bold;
            }
            .about-section {
            background: #f8f9fa;
            padding: 5rem 0;
            }
            .mission-section {
                padding: 5rem 0;
            }
            .team-section {
                background: #f8f9fa;
                padding: 5rem 0;
            }
            .cta-section {
                background: #007bff;
                color: white;
                padding: 5rem 0;
                text-align: center;
            }
            .team-member {
                text-align: center;
            }
            .team-member img {
                border-radius: 50%;
                margin-bottom: 1rem;
            }
        </style>
</head>

<body>
    @include('includes.nav')
    @yield('herosection')

    <div class="container mt-3">
        <main>
            @yield('content')
        </main>
    </div>

    @include('includes.footer')  
</body>

</html>
