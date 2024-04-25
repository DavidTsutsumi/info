<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Consultorio Médico</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg bg-light navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="{{ asset('img/logo.png') }}" width="60px" alt="">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Citas</a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Acerca de nosotros</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <section class="carrusel">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" id="car">
                        <img id="im" src="{{ asset('img/1.jpg') }}" class="d-block" width="1300px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Médicos expertos</h5>
                            <p>Hacer el trabajo de la mejor forma.</p>
                        </div>
                    </div>
                    <div class="carousel-item" id="car">
                        <img id="im" src="{{ asset('img/2.jpeg') }}" class="d-block" width="1300px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Médicos expertos</h5>
                            <p>Hacer el trabajo de la mejor forma.</p>
                        </div>
                    </div>
                    <div class="carousel-item" id="car">
                        <img id="im" src="{{ asset('img/3.jpeg') }}" class="d-block" width="1300px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Médicos expertos</h5>
                            <p>Hacer el trabajo de la mejor forma.</p>
                        </div>
                    </div>
                </div>
                <button id="bot" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button id="bot" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="catalogos mt-4">
            <div class="container">
                <div class="row">
                    <div id="tit" class="col text-center">
                        Médicos especialistas
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/med.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Médico general</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/der.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dermatólogo</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('img/nut.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nutriólogo</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="introduccion">
            <div class="container-fluid">
                <div class="row">
                    <div class="col pt-5">
                        <img src="img/10.jpg" alt="">
                    </div>
                    <div class="col pt-5">
                        <p>
                            Esta sección tiene como finalidad dar tips al usuario para el uso del sistema
                        </p>
                        <ol>
                            <li>Recuerda no compartir tu usuario y contraseña.</li>
                            <li>Revisa las citas proximas dentro de la sección citas.</li>
                            <li>Puedes revisar los reportes de los datos registrados.</li>
                            <li>Puedes exportar tus reportes.</li>
                            <li>Puedes eliminar los registros que ya no son necesarios, tomando en cuenta que la información no se podrá recuperar.</li>
                        </ol>
                        <p>
                            Si tienes problemas mandanos un correo a soporte y te ayudaremos
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <footer id="fot" class="pb-5 pt-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-lg">
                        <a href="">Preguntas frecuentes</a>
                    </div>
                    <div class="col-12 col-lg">
                        <a href="">Sitio web</a>
                    </div>
                    <div class="col-12 col-lg">
                        <a href="">Contacto</a>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>

</html>