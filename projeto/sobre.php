<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Serviços</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-------------- Header ----------------------->

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
            <div class="clear"></div>
        </div>

    </section>


    <!-------------- Home ----------------------->

    <section class="equipe-container">
        <div class="center">
            <div class="w50 equipe-text">
                <h2>Uma equipe estratégica para um trabalho incrível</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus ducimus dolorum velit. Fugiat atque illum incidunt esse saepe maiores reiciendis sint ea quaerat porro dolore quas, impedit tenetur rem aliquam!</p>
            </div>

            <div class="w50 equipe-img">
                <img src="img/foto.png"">
            </div>
        </div>
    </section>

 <!-------------- slider clientes ----------------------->
 
 <section class=" clientes">

                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
    </section>

    <!-------------- Footer ----------------------->

    <footer>
        <section class="metodologia">
            <div class="center">
                <h2>Conheça nossa Metodologia</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In beatae minus accusantium deserunt dignissimos dolorum itaque necessitatibus labore consequuntur incidunt expedita laboriosam quisquam illo laborum eaque quia molestiae, eius inventore?</p>
                <a href="#">Vamos conversar</a>
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


    <script src="js/script.js" async defer></script>

    <!-- Swiper JS -->

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>

</body>

</html>