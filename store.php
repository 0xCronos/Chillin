<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="La comunidad Chillin te ofrece servidores de Minecraft de calidad, con comunida de habla hispana solida y libre de flammers.">
    <title>Chillin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords" content="minecraft, servidor, chillin, chile, latinoamerica, español, hispana, descargar, discord,">
    <meta name="author" content="0xCronos">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="64x64">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="fontAwesome/css/all.min.css">
    <link rel="stylesheet" href="css/glider.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/dialog.css">
    <link rel="stylesheet" href="css/dialog-wilma.css">
    <script src="js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="css/master.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/glider.min.js"></script>
</head>
<body class="bg">
	<?php include_once 'views/navbar.php'; ?>

	<div class="s-container container">
		<div class="row">
			<div class="col-12">
				<h1 style="text-align: center;" id="store-h1">Donaciones</h1>
			</div>
			<div class="col-12">
                <p>No contamos con ningun sistema de VIP como tienda, no obstante aceptamos donaciones que se pueden ver reflejadas como mejoras para tu experiencia in-game</p>
                <p>Tener un sistema de pagos integrados en una página web es muy complejo para gente que no puede pagar con tarjeta de credito, por eso decidimos solo recibir pagos desde Chile a través de CuentaRUT</p>
                
            </div>

		</div>
    <div class="container">
        <div class="progress progress-striped active">
          
          <p class="alert alert-success raised" id="money-raised"><strong>Recaudado: 5.000</strong></p>

          <p class="alert alert-success goal" id="money-goal"><strong>Meta: 25.000</strong></p>
          
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:;" id="progress-bar">
            <span class="sr-only">0% completado</span>
          </div>
        </div>
    </div>

        <?php include_once 'views/pricing.php'; ?>

	</div>

	<?php include_once 'views/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script><script src="js/main.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/dialogFx.js"></script>
    <script>
        (function() {

            var dlgtrigger = document.querySelector( '[data-dialog]' ),
                somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
                dlg = new DialogFx( somedialog );

            dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

        })();
    </script>
    <script type="text/javascript">
        money = document.getElementById("money-raised").innerHTML;
        goal = document.getElementById("money-goal").innerHTML;

        var money_int = money.replace(/\D/g, "");
        var goal_int = goal.replace(/\D/g, "");

        percent = (money_int / goal_int) * 100;
        document.getElementById("progress-bar").style.width = percent + "%";

    </script>
    <script src="js/main.js"></script>
</body>
</html>