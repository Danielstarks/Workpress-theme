<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Wordpress theme</title>

</head>

<body>
    <!--------------- Header -------------->

    <section class="topo">

        <div class="center">

            <header>
                <nav class="navbar">

                    <a class="nav-branding" href="#"><img src="img/logo.png" alt="logo"></a>

                    <ul class="nav-menu">
                        <li class="nav-item"><a href="./index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="./sobre.php" class="nav-link">Serviços</a></li>
                        <li class="nav-item"><a href="./contact.php" class="nav-link">Contatos</a></li>
                    </ul>

                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>

                </nav>
            </header>

            <div class="w50 time-text">
                <h2>Melhore a comunicação com seu cliente e time.</h2>
                <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>

                <a href="#" target="_blank">Vamos conversar</a>
            </div>
            <div class="w50 time-img">
                <img src="img/equipe.png" alt="equipe">
            </div>
            <div class="clear"></div>
        </div>

    </section>

    <!--------------- Slider -------------->

    <div class="button">
       <a href="#footer"><i id="btn-icon" class='bx bxs-chevron-down'></i></a> 
    </div>

    <section class="slider-clientes">

        <div id="carouselExampleSlidesOnly" class="carousel slide center mt-5 mb-5 p-5 w-100 ;" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/marca1.png" class="rounded mx-auto d-block mw-100 w-50 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/marca2.png" class="rounded mx-auto d-block mw-100 w-50 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/marca3.png" class="rounded mx-auto d-block mw-100 w-50 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/marca4.png" class="rounded mx-auto d-block mw-100 w-50 img-fluid" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/marca5.png" class="rounded mx-auto d-block mw-100 w-50 img-fluid" alt="...">
                </div>
            </div>
        </div>

    </section>

    <!--------------- Services -------------->

    <section class="services">
        <div class="center">

            <h2>Contribuimos de ponta a ponta</h2>

            <div class="box">
                <div class="icon">
                    <img src="img/icon1.png" alt="logo">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>
                <div class="icon">
                    <img src="img/icon2.png" alt="logo">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>
                <div class="icon">
                    <img src="img/icon3.png" alt="logo">
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>
            </div>
        </div>
    </section>

    <!--------------- About -------------->

    <section class="about">
        <div class="center">
            <div class="w50 sobre-text">
                <h2>Um time experiente, comunicador e coeso.</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quia, dolore corporis temporibus nam ipsa itaque hic accusantium iure unde, provident porro mollitia sit voluptatibus adipisci fugiat perspiciatis in consequatur!
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quia, dolore corporis temporibus nam ipsa itaque hic accusantium iure unde, provident porro mollitia sit voluptatibus adipisci fugiat perspiciatis in consequatur!
                </p>
            </div>
            <div class="w50 sobre-img">
                <img src="img/time.png" alt="logo">
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <!--------------- Testimonials -------------->

    <section class="testimonials">
        <div class="center">
            <h2>Testimonials</h2>
            <div class="testimonials-box">
                <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner mw-100">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="https://source.unsplash.com/700x600/?peopla" class="rounded mx-auto d-block  mw-100 w-50" alt="...">
                            <div style="background-color:#2020205d;" class="carousel-caption d-none d-md-block w-50 mx-auto">
                                <h5 style="color: white;">First slide label</h5>
                                <p style="color: white;">Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://source.unsplash.com/700x600/?woman" class="rounded mx-auto d-block  mw-100 w-50" alt="...">
                            <div style="background-color:#2020205d;" class="carousel-caption d-none d-md-block w-50 mx-auto">
                                <h5 style="color: white;">Second slide label</h5>
                                <p style="color: white;">Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <img src="https://source.unsplash.com/700x600/?childreen" class="rounded mx-auto d-block  mw-100 w-50" alt="...">
                            <div style="background-color:#2020205d;" class="carousel-caption d-none d-md-block w-50 mx-auto">
                                <h5 style="color: white;">Third slide label</h5>
                                <p style="color: white;">Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!--------------- Footer -------------->

    <footer id="footer">
        <section class="metodologia">
            <div class="center">
                <h2>Conheça nossa Metodologia</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In beatae minus accusantium deserunt dignissimos dolorum itaque necessitatibus labore consequuntur incidunt expedita laboriosam quisquam illo laborum eaque quia molestiae, eius inventore?</p>
                <a href="./contact.php">Vamos conversar</a>
            </div>
        </section>

        <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="#">Contact</a>
                <a href="#">FAQ</a>
            </div>
            <div class="col-footer">
                <h2>Consultoria</h2>
                <a href="#">Palestras</a>
                <a href="#">Cursos</a>
            </div>
            <div class="col-footer">
                <h2>Empresa</h2>
                <a href="#">Serviços</a>
                <a href="#">Carreira</a>
            </div>
            <div class="col-footer">
                <img src="img/logo2.png" alt="logo">
            </div>
        </div>
    </footer>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHKBUoT_qH4"></script>
    <script src="js/map.js"></script>
    <script src="js/script.js"></script>

</body>

</html>