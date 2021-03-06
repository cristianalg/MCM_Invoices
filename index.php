<?php
	session_start(); //cria uma sessão ou resume a sessão atual baseado num id de sessão passado via POST
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MCM - Sistemas Distribuídos</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>
<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">INVOICES</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#conceito">Conceito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"><font color="#61380B"><b>Bem vindo à sua </b></font></div>
        <div class="intro-heading text-uppercase"><font color="#61380B"><i>Plataforma Digital</i></font></div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Saber mais...</a>
      </div>
    </div>
  </header>

  <!-- Conceito -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Conceito</h2>
          <h3 class="section-subheading text-muted">Plataforma Digital para Gestão de Garantias dos Produtos</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Plataforma</h4>
          <p class="text-muted">Através de um login, válido, o utilizador pode registar a compra dos 
		  seus produtos e associar o prazo término da sua garantia. 
		  E o mesmo ser alertado, via e-mail, a fim da sua garantia.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-globe fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">WebService</h4>
          <p class="text-muted">
		  O WebService efetua o processamento e envia os dados para a plataforma que solicita uma operação.
		  A plataforma recebe os dados e faz a sua interpretação, convertendo-os para a sua linguagem própria.
		  </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Cloud</h4>
          <p class="text-muted">
		  A cloud dá a noção de dispositivo de armazenamento de dados colocado na Internet, acessível 
		  a partir de qualquer plataforma, seja móvel ou não.
		  </p>
        </div>
      </div>
    </div>
  </section>


  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About - Team</h2>
          <h3 class="section-subheading text-muted">
		  Pretende-se com este projeto desenvolver uma plataforma digital  para Gestão de Garantias dos Produtos,
		  a página web terá a designação de Invoices. Este projeto vai ser desenvolvido no âmbito da unidade curricular 
		  Sistemas Distribuídos Móveis do Mestrado de Computação Móvel do ano 2018 /2019.      
		  </h3>
        </div>
      </div>
	  
	  <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/91.jpg" alt="">
            <h4>Cristiana Gabriel</h4>
            <p class="text-muted">Aluna do Mestrado de Computação Móvel</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/cristiana.lopes.75033">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/cristiana-gabriel-520703124/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
		
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/92.jpg" alt="">
            <h4>Janilza Simão</h4>
            <p class="text-muted">Aluna do Mestrado de Computação Móvel</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/janinha.simao">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/janilza-sim%C3%A3o-229088152/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
		
      </div>
    </div>
  </section>


  
  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">&copy; <i>Cristiana&Janilza 2019 </i></span>
        </div>
        
      </div>
    </div>
  </footer>
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
