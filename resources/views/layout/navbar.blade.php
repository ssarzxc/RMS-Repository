<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NavBar</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href ="https://fonts.bunny.net.css?family=Nunito" rel="stylesheet">
</head>

<body style="min-height:100vh; display:flex; flex-direction:column;">
    <nav class="navbar navbar-expand-lg bg-body-primary" shadow="black" data-bs-theme="dark">
        <div class="container-fluid py-1">
            <a class="navbar-brand text-success" href="">
                <i class="fas fa-leaf"></i>
                Canopy Farm
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-disabled="true">Services</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Bookings
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="#">Book Room</a></li>
                            <li><a class="dropdown-item" href="#">Book Event</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Contact Us
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="#">FAQs</a></li>
                            <li><a class="dropdown-item" href="#">Feedback Form</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
               <form class="d-flex">
                    <input class="form-control me-2 border border-success bg-transparent text-dark" type="search"
                        placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!---<p class="text-center">Sarah Isabelle S. Malaras</p>-->
    @yield('content')
    @include('layout.footer')
</body>

</html>
