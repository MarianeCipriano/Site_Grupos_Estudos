<!DOCTYPE html>
<html lang="en">
<head>
	<title>Publicar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

  /*Barra da Carol acima*/

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <img src="img/icone.ico" class="navbar-brand">
      <a class="navbar-brand" href="#">Grupos de Estudo </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="cadastrar.html">Cadastrar membro</a>
          <span class="sr-only">(current)</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#" onclick="window.location.href = 'http://bambui.ifmg.edu.br/portal//portal/'">IFMG Bambuí</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.html">Sair</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>



 /*Limite central*/

  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-03.jpg');">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
        <form class="login100-form validate-form">
          <span class="login100-form-title p-b-49">
            Publicação
          </span>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Informe o usuário">
            <span class="label-input100">Texto</span>
            <input class="input100" type="text" name="Username" placeholder="Novidades da semana...">
            <span class="focus-input100" ></span>
          </div>

          <div class="wrap-input100 validate-inputb" data-validate="Foto">    
            <span class="label-input100">Imagem</span>
            <input type="file" />
            <span class="focus-input100" ></span>
          </div>
          
          <hr>
          
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button class="login100-form-btn"> 
                <a class="nav-link" href="default.html">Publicar</a>
                
              </button>
            </div>
          </div>

          <div id="dropDownSelect1"></div>

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>