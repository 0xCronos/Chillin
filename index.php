<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/glider.min.css">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="64x64">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/glider.min.js"></script>
    <link rel="stylesheet" href="css/master.css">
   <title>Chillin</title>
</head>
<body class="bg">
    <!-- Navbar and section home-->
    <?php include_once 'views/navbar.php'; ?>
    
    <!-- STAFF-->
    <div class="content pl-5 pr-5 h-20">
        <div class="glider-contain">
            <div class="glider" id="staff-container"></div>
            <button role="button" aria-label="Previous" class="glider-prev">«</button>
            <button role="button" aria-label="Next" class="glider-next">»</button>
        </div>
    </div>

    <!-- SECTION 1 -->
    <div id="section-1"></div>
    <div id="scene">
        <div data-depth="0.2" class="container-fluid mt-5">
            <img src="img/logo.png" class="mx-auto d-block logo" alt="Chillin logo">
            <div  class="content-fluid d-flex justify-content-center mt-5">
                <h1 class="text-center">ChillinMC.sytes.net</h1>
            </div>
        </div>
    </div>

    <!-- Scroll button to section 2-->
    <div class="content text-center scroll-button fa-4x">
        <a data-scroll href="#community" id="scroll-button">
            <i class="fas fa-angle-double-down">
                <!-- scroll down section community -->
                <div id="community"></div>
        </i></a>
        </div>
    </div>
    <div class="content custom-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/community.png" class="comunity-img" alt="chillin comunidad">
                </div>
                <div class="col-md-6">
                    <h2>¿Quienes somos?</h2>
                    <p>Chillin es una comunidad enfocada a los videojuegos, libre de flamers y muy amigable con los nuevos miembros, con un staff
                        siempre dispuesto a contestar cualquier duda. Únete a la aventura y ven a disfrutar con
                        nosotros los desafios que el mundo de minecraft te entrega.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="content custom-container nigger-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Buen ambiente</h2>
                    <p>Conoce nuevos amigos, ve de caza, crea cultivos, doma criaturas salvajes o simplemente
                        camina por nuestros bellos biomas que tenemos para ti.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="img/1.png" class="comunity-img" alt="chillin comunidad">
                </div>
            </div>
        </div>
    </div>
    <div class="content custom-container nigger-nigger-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/experience.jpg" class="comunity-img" alt="chillin comunidad">
                </div>
                <div class="col-md-6">
                    <h2>Experiencia mejorada</h2>
                    <p>Nuestro servidor utiliza plugins para ofrecer una experiencia de juego
                       unica e inigualable, que te asegurarán horas y horas de diversión.
                    </p>
                </div>
                <!-- scroll down section discord -->
                <div id="discord"></div>
            </div>
        </div>
    </div>

    <div class="content custom-container bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h2>Unete a discord!</h2>
                    <p class="text-white">Enterate de las ultimas novedades en nuestro discord,
                        conoce las reglas, contacta al soporte, y adentrate en esta
                        hermosa comunidad.
                    </p>
                    <div class=" text-center text-white">
                        <i class="fab fa-discord"></i>
                        <a class="discord-link"href="https://discord.gg/9HXaKGA" target="_blank">
                            Entrar a discord
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://discordapp.com/widget?id=692388027418542092&theme=dark" allowtransparency="true" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once 'views/carousel.php' ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script><script src="js/main.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
