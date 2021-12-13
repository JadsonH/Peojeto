<!DOCTYPE html>
<html>
<head>
	<title>Adicionar filmes</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

   <div id="copy-area">
    <div class="container">
	  <div class="row">
	    <div class="col-md-12">
		  <form action="{{route('salvar')}}" method="POST">
  	        @csrf
            <p>Nome: <input type="text" class="form-control" name="nome"></p>
            <p>Ano: <input type="text" class="form-control" name="ano"></p>
            <p>País de origem: <input type="text" class="form-control" name="pais"></p>
            <p>Gênero: <input type="text" class="form-control" name="genero"></p>
            <p>Diretor: <input type="text" class="form-control" name="diretor"></p>
            <p>Faixa etária: <input type="text" class="form-control" name="faixa etaria"></p>
            <p>Atores: <input type="text" class="form-control" name="atores"></p>
            <p>Sinopse: <input type="text" class="form-control" name="sinopse"></p>
            <p>Crítica: <input type="text" class="form-control" name="critica"></p><br>
           <input type="submit" class="main-btn" value="enviar">
         </form>
		</div>
	  </div>
	</div>
  </div>
  <hr>
  	<h1>Filmes:</h1>

   @foreach ($filmes as $element)
   <p>
   	 {{$element->nome}}
   </p>
   @endforeach
 
</body>
</html>