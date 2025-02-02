<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="widtth=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>The Five</title>
   <link rel="shortcut icon" href="/img/icone.png">
   <!--Fonte-->
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
   <!--bootstrap-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" href="css/styles.css">
   <!--Scripts-->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   <!--Font Awesome-->
   <script src="https://Kit.fontawesome.com/bf7e05c402.js" crossorigin ="anonymous"></script>
   <!--Progress bar-->
   <script src="js/progressbar.min.js"></script>
   <!--Parallax-->
   <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>
<header> 
   <div class="container" id="nav-container">
     <nav class="navbar navbar-expand-lg fixed-top">
	  <a href="#" class="navbar-brand">
	   <img src="/img/Logo1.PNG" id="logo" alt="The Five">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
	   <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
	    <div class="navbar-nav">
		 <a href="#nav-container" class="nav-item nav-link" id="home-menu">Dashboard</a>
		 <a href="#about-area" class="nav-item nav-link" id="about-menu">Sobre</a>
		 <a href="#contact-area" class="nav-item nav-link" id="contact-menu">Contatos</a>
		</div>
	  </div>
	 </nav>
   </div>
</header>
<main>
  <div class="container-fluid">
    <div id="mainSlider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
	    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
	    <li data-target="#mainSlider" data-slide-to="1" ></li>
	    <li data-target="#mainSlider" data-slide-to="2" ></li>
	  </ol>
	  <div class="carousel-inner">
	   <div class="carousel-item active">
	    <img src="/img/b1.jpg" class="d-block w-100" alt="Projetos de e-commerce">
		<div class="carousel-caption d-none d-md-block">
		  <h2>Entre e veja mais sobre esse mundo do cinema e da literatura</h2>
		  <p>Entre nesse universo</p>
		  <a href="{{ url('/login') }}" class="main-btn">Login</a>
		</div>
	   </div>
	   <div class="carousel-item ">
	    <img src="/img/b2.jpg" class="d-block w-100" alt="Engenharia">
		<div class="carousel-caption d-none d-md-block">
		  <h2>Conheça o nosso trabalho</h2>
		  <p>Se cadastre no nosso site e veja tudo sobre os filmes/séries e os livros</p>
		  <a href="{{ url('/register') }}" class="main-btn">Cadastrar-se</a>
		</div>
	   </div>
	   <div class="carousel-item ">
	    <img src="/img/b3.jpg" class="d-block w-100" alt="Software">
		<div class="carousel-caption d-none d-md-block">
		  <h2>Quer saber mais sobre o nosso site</h2>
		  <p>Literatura e cinema também é importante</p>
		  <a href="#contact-area" class="main-btn">Entrar em contato</a>
		</div>
	   </div>
	  </div>
    <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
	</div>
	<!--Sobre a empresa-->
	<div id="about-area">
	   <div class="container">
	       <div class="row">
		       <div class="col-12">
			      <h3 class="main-title">Sobre The Five</h3>
			   </div>
			   <div class="col-md-6">
			      <img class="img-fluid" src="/img/Foto.png" alt="The Five">
			   </div>
			   <div class="col-md-6">
			      <h3 class="about-title">Nosso site pensa no seu entretenimento</h3>
				  <p>Seja bem-vindo(a) ao The five, o site ideal para você que deseja está por dentro da cultura cinematográfica 
				  e literária. Aqui você fica por dentro dos filmes, séries, livros e animes mais incríveis!! E ainda pode contar 
				  com uma análise detalhada tudo, com e sem Spoiler.</p>
				  <p>O The five é um site para analise e descrição da cultura cinematográfica e literária. Apresentamos as características
				  oficiais do produto, como sinopse, data de estreia, auto, ano e categoria. Além de uma análise crítica detalhada, trazemos
				  para vocês loucos por séries, livros, filmes e etc, um conteúdo de qualidade para facilitar sua experiência ao assistir/ler
				  as novidades do mercado.</p>
			   </div>
		   </div>
       </div>	
	</div>
	<!--Sobre o PI-->
	<div id="data-area">
	   <div class="container">
	      <div class="row">
		    <div class="col-md-3 circle-box">
			  <div id="circleA"></div>
			  <p>Filmes</p>
			</div>
			<div class="col-md-3 circle-box">
			  <div id="circleB"></div>
			  <p>Séries</p>
			</div>
			<div class="col-md-3 circle-box">
			  <div id="circleC"></div>
			  <p>Livros</p>
			</div>
			<div class="col-md-3 circle-box">
			  <div id="circleD"></div>
			  <p>Analistas</p>
			</div>
		  </div>
	   </div>
	</div> <br/>
</main>
<!--Rodapé-->

<footer>
  <div id="contact-area">
     <div class="container">
	    <div class="row">
		   <div class="col-md-12">
		      <h3 class="main-title"> Entre em contato conosco</h3>
		   </div>
		   <div class="col-md-4 contact-box">
		       <i class="fas fa-phone"></i>
			   <p><span class="contact-title">Ligue para:</span> (84)99999-9999</p>
			   <p><span class="contact-title">Horários:</span> 8:00 - 20:00</p>
		   </div>
		   <div class="col-md-4 contact-box">
		       <i class="fas fa-envelope"></i>
			   <p><span class="contact-title">Envie um E-mail:</span> TheFive@gmail.com.br</p>
		   </div>
		   <div class="col-md-4 contact-box">
		       <i class="fas fa-map-marker-alt"></i>
			   <p><span class="contact-title">Venha tomar um café:</span> Rua São Sebastião - N°1211</p>
		   </div>
		   <div class="col-md-6" id="msg-box">
		      <p>Ou nos deixe uma mensagem:</p>
		   </div>
		   <div class="col-md-6" id="contact-form">
		      <form class="Form" method="POST" action="php/email.php">
			     <input type="email" class="form-control" placeholder="E-mail" name="email">
				 <input type="text" class="form-control" placeholder="Assunto" name="subject">
				 <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
				 <input type="submit" class="main-btn" value="Enviar">
			  </form>
		   </div>
		</div>
	 </div>
  </div>
  <div id="copy-area">
    <div class="container">
	  <div class="row">
	    <div class="col-md-12">
		 <p>Desenvolvido por<a href="Colocar qualquer link" target="_blank"> The Five</a> &copy; 2022</p>
		</div>
	  </div>
	</div>
  </div>
</footer>
<!--Scripts do projeto-->
 <script src="js/scripts.js"></script>
</body>
</html>