
<?php
  include("php/consulta.php")
?>

<!DOCTYPE html>
<html>
<head>

  <?php while($dados = $consulta->fetch_array()){ ?>
	<title><?php echo $dados["Sigla"]; ?></title>
	<link href="public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <img src="img/favicon.ico" class="navbar-brand">
      <a class="navbar-brand" href="index.html">Grupos de Estudo </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#sobre">Sobre
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#membros">Membros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#publicacoes">Publicações </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contatos"> Contatos</a>
          </li>
        </ul>
      </div>

   <hr></hr>
   <hr></hr>
   <hr></hr>

    </div>
  </nav>
    <div id="sobre" class="about-area area-padding" id="navbarResponsive">
    	<div class="container">
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
				<img src= <?php echo $dados["caminho"]  ?> height="300px" width="500px" id="navbarResponsive" >
			</a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-6">
          <div class="well-middle">
            <div class="single-well" id="navbarResponsive">
            
                <h4 class="sec-head">Sobre o <?php echo $dados["Sigla"]; ?></h4>
            
              <p>
                <?php echo $dados["Descricao"]; ?>
              </p>
              
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
	   
    	</div>	
    </div>
    <!-- End About area -->
     <hr>
	<div id="membros" class="about-area area-padding" id="navbarResponsive">
		<div class="container">
			<div class="row mb-5 justify-content-center">
	        <div class="col-md-7 text-center">
	        	<div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <?php } ?>
                <h2>MEMBROS DO GRUPO DE ESTUDOS</h2>
                <p> </p>
              </div>
	        </div>
        </div>
			<div class="owl-carousel owl-all">
            <div class="block-team-member-1 text-center rounded h-100">
              <figure>
                <img src="img/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Arrogante na serie A2</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Presidente do Grupo de estudos</span>
              <p class="mb-4">Integrante do grupo desde 2018, estudante de engenharia de Computação</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>
		</div>
		 <div class="block-team-member-1 text-center rounded h-100">
              <figure>
                <img src="img/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Miriam Lacerda</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Vice presidente do grupo de estudos</span>
              <p class="mb-4">Integrante do grupo desde 2018, estudante de Engenharia de Computação</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>

            <div class="block-team-member-1 text-center rounded h-100">
              <figure>
                <img src="img/person_3.jpg" alt="Image" class="img-fluid rounded-circle">
              </figure>
              <h3 class="font-size-20 text-black">Mariane Cipriano</h3>
              <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Integrante do Grupo de estudos</span>
              <p class="mb-4">Integrante do grupo desde 2017, faz engenharia de computação e uma arrogante que está na série A2.</p>
              <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
              </div>
            </div>

	</div>
	</div>
  <!-- Start Service area -->
    <div id="publicacoes" class="about-area area-padding">
    	<div class="container">
    		<div class="row">
		        <div class="col-md-12 col-sm-12 col-xs-12">
		          <div class="section-headline text-center">
		            <h2>Publicações</h2>
		          </div>
		        </div>
		     </div>
		<hr>
    	</div>
    </div>
    <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <h2 class="post-title">
              Trabalho de programação Web;
            </h2>
            <h3 class="post-subtitle">
              O trabalho deve ser apresentado até dia 12/12/2019.
            </h3>
          <p class="post-meta">Postado em: </p>
        </div>
        <hr>
        <div class="post-preview">
            <h2 class="post-title">
              Trabalho de PDI
            </h2>
            <h3>
              O trabalho deve ser apresentado até o fim do semestre;
            </h3>
          <p class="post-meta">Postado em: </p>
           
        </div>
        <hr>
        <div class="post-preview">
            <h2 class="post-title">
              Reunião
            </h2>
            <h3 class="post-subtitle">
              Nossa reunião está marcada para o dia 15 de dezembro de 2019.
              É fundamental a presença de todos os membros do grupo.
            </h3>
          <p class="post-meta">Postado em: </p>
        </div>
        <hr>
        
      </div>
    </div>
  </div>

  <hr>


	<footer>
	 <div id="contatos" class="about-area area-padding" id="navbarResponsive">
    	<div class="container">
    		<div class="row">
		        <div class="col-md-12 col-sm-12 col-xs-12">
		          <div class="section-headline text-center">
		            <h2>Contatos</h2>
		          </div>
		        </div>
		     </div>
    	</div>
    </div>
	<div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <img src="img/facebook.png" width="50px" height="50px">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
            </li>
            <li class="list-inline-item">
              <img src="img/instagram.png" width="75px" height="75px">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
            </li>
            <li class="list-inline-item">
              <img src="img/gmail.png" width="50px" height="50px" >
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-gmail fa-stack-1x fa-inverse"></i>
                </span>
            </li>
          </ul>
          <p class="copyright text-muted text-center">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
			<!--JS-->
			<script scr="public/js/jquery.js"></script>
			<script scr="public/js/bootstrap.bundle.min.js"></script>
	</footer>
</body>
</html>