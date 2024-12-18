@extends ('layout.navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" >
    <title>Home Page</title>
</head>

<body>
    @section('content')
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/canopyhome.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h1 style="font-size: 4rem; font-family: 'Ubuntu';">Canopy Farm</h1>
                        <p style="font-size: 1.2rem">where nature, meets elegance</p>
                        <a href="" class="btn btn-success btn-lg">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!----SERVICES---->
        <div class="container">
            <div class="row py-3">
                <div class="col-lg-12 col-md-8 col-sm-12">
                    <div class="row py-3">
                        <h1 style="font-weight: bold;" class="text-center text-success">OUR SERVICES</h1>
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card" style="width: 27rem; height:25rem">
                                                <img src="/images/canopypool.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class=" text-center card-title">Card Title 1</h5>
                                                    <p class="card-text text-center">Some quick example text to build on the
                                                        card title. Some quick example text to build on the card title.
                                                    </p>
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-success">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card" style="width: 27rem; height:25rem">
                                                <img src="/images/canopyy.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class=" text-center card-title">Card Title 2</h5>
                                                    <p class="card-text text-center">Some quick example text to build on the
                                                        card title. Some quick example text to build on the card title.
                                                    </p>
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-success">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card" style="width: 27rem; height:25rem">
                                                <img src="/images/canopypool2.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class=" text-center card-title">Card Title 3</h5>
                                                    <p class="card-text text-center">Some quick example text to build on the
                                                        card title. Some quick example text to build on the card title.
                                                    </p>
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-success">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card" style="width: 27rem; height:25rem">
                                                <img src="/images/canopypool.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class=" text-center card-title">Card Title 4</h5>
                                                    <p class="card-text text-center">Some quick example text to build on the
                                                        card title. Some quick example text to build on the card title.
                                                    </p>
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-success">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card" style="width: 27rem; height:25rem">
                                                <img src="/images/canopyy.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class=" text-center card-title">Card Title 5</h5>
                                                    <p class="card-text text-center">Some quick example text to build on the
                                                        card title. Some quick example text to build on the card title.
                                                    </p>
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-success">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card" style="width: 27rem; height:25rem">
                                                <img src="/images/canopypool2.png" class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class=" text-center card-title">Card Title 6</h5>
                                                    <p class="card-text text-center">Some quick example text to build on the
                                                        card title. Some quick example text to build on the card title.
                                                    </p>
                                                    <div class="text-center">
                                                        <a href="#" class="btn btn-success">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <h2>Contact Us</h2>
                        <form id="request" class="main_form">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Name" name="Name">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email" name="Email">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="Phone Number" name="Phone Number">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Message" name="Message"></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.2502287794205!2d120.885106586352!3d14.180116951815094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd83d64e074a45%3A0x74d9317979d3664b!2sThe%20Canopy%20Farm%20PH!5e0!3m2!1sen!2sph!4v1732550161255!5m2!1sen!2sph"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
</body>

</html>
