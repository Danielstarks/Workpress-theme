<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

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
            <div class="w50 contato-info">
                <h2>A mais importante, primeira conversa.</h2>

                <ul class="contato-icons">
                    <li><a href="#"><i class='bx bxl-whatsapp'></i></a></li>
                    <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                    <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                </ul>


                <div class="mapa-container">
                    <div id="mapa"></div>
                </div>
            </div>
            <div class="w50 contato-form">
                <form action="">

                    <input placeholder="Nome" type="text">
                    <input placeholder="E-mail" type="text">
                    <input placeholder="Telefone" type="text">

                    <select>
                        <option>Geral</option>
                        <option>Suporte</option>
                    </select>

                    <textarea placeholder="Mensagem" name="" id="" cols="30" rows="10"></textarea>

                    <input type="submit" value="Enviar">

                </form>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <!-------------- Footer ----------------------->

    <footer style="padding: 7rem 0;margin-top: 40rem;">
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
   
</body>

</html>