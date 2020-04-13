<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="La comunidad Chillin te ofrece servidores de Minecraft de calidad, con una comunidad de habla hispana solida y libre de flammers.">
    <title>Chillin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="minecraft, servidor, chillin, chile, latinoamerica, español, hispana, descargar, discord">
    <meta name="author" content="0xCronos, Torokokoo">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="64x64">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontAwesome/css/all.min.css">
    <link rel="stylesheet" href="css/glider.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/dialog.css">
    <link rel="stylesheet" href="css/dialog-wilma.css">
    <link rel="stylesheet" href="css/master.css">
</head>
<body class="bg">
    <!-- Navbar and section home-->
    <?php include_once 'views/navbar.php'; ?>

    <!-- Home section  -->
    <div id="section-1"></div>
    <div id="scene">
        <div data-depth="0.2" class="container-fluid mt-5">
            <img src="img/logo.png" class="mx-auto d-block logo" alt="Chillin logo">
            <div  class="content-fluid d-flex justify-content-center mt-5">
                <h1 class="text-center">ChillinMC.sytes.net</h1>
            </div>
        </div>
    </div>

    <!-- Community section -->
    <?php include_once 'views/community.php' ?>

    <!-- Discord section-->
    <?php include_once 'views/discord.php'  ?>
    <!-- Discord section - subsection staff -->
    <?php include_once 'views/staff.php'    ?>

    <!-- Gallery section -->
    <?php include_once 'views/carousel.php' ?>

    <?php include_once 'views/footer.php' ?>

    <!-- Includes -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/glider.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/dialogFx.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
