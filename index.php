<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Saudades, Xandão</title>	
  </head>
  <body>
  <header class="d-flex">
	<div class="container align-items-center">	
		<h1> Lucas Alamini - IPW 4 Mendes </h1>
		</div>
	</header>
			
 
  <section class="container">
	<main class="col p-4 ">	
	<?php 
	if(isset($_GET['dir']) and isset ($_GET['file'])){
		echo '<a href="index.php"> Voltar</a> <br> <br>';
		include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
	}else{
	
	?>
	<div class="row">
	<div class="col-md-4 p-2">
	<div class= "p-0 modulo verde-escuro">
	<h3 class="p-2"> Introdução php </h3>
				<ul>	

					<li>
						<a href="?dir=1_introducao&file=1_echo">1 - echo</a>
					</li>
					<li>
						<a href="?dir=1_introducao&file=2_variavel">2 - variavel</a>
					</li>

					<li>
						<a href="?dir=1_introducao&file=3_comentario">3 - comentários</a>
					</li>
					<li>
						<a href="?dir=1_introducao&file=4_String">4 - String</a>
					</li>
				</ul>
		</div>
		
		</div>
		<div class="col-md-4 p-2">
			<div class= "  modulo verde-escuro">
	<h3 class="p-2"> 2 funções </h3>
				<ul>	

					<li>
						<a href="?dir=2_funcoes&file=1_funcoes">1 funções</a>
					</li>
					
					<li>
						<a href="?dir=2_funcoes&file=2_data">2 data</a>
					</li>
					<li>
						<a href="?dir=2_funcoes&file=3_funcaopow">3 Pow</a>
					</li>
				
					<li>
						<a href="?dir=2_funcoes&file=4_funcaostrlen">4 Função Strlen</a>
					</li>
					
					<li>
						<a href="?dir=2_funcoes&file=5_return">5 return</a>
					</li>
					<li>
						<a href="?dir=2_funcoes&file=6_isint">6 is int</a>
					</li>
	
				</ul>
		</div>
		
		<div class="row-md-4 p-2">
			<div class= "  modulo verde-escuro">
	<h3 class="p-2"> 3 exercícios </h3>
				<ul>	

					<li>
						<a href="?dir=3_exercicio&file=exercicio01">01</a>
					</li>
					
					<li>
						<a href="?dir=3_exercicio&file=02">02</a>
					</li>
					<li>
						<a href="?dir=3_exercicio&file=03">03</a>
					</li>
				</ul>
		</div>
		</div>
			<div class="row-md-4 p-2">
			<div class= "  modulo verde-escuro">
	<h3 class="p-2"> 4 array </h3>
				<ul>	

					<li>
						<a href="?dir=4_array&file=1_array">01</a>
					</li>
				</ul>
		</div>
		</div>
				<div class="row-md-4 p-2">
			<div class= "  modulo verde-escuro">
	<h3 class="p-2"> 5 PDO </h3>
				<ul>	

					<li>
						<a href="?dir=5_PDO&file=01">PDO 01</a>
					</li>
					<li>
						<a href="?dir=5_PDO&file=2_trycatch">Try catch</a>
					</li>
					<li>
						<a href="?dir=5_PDO&file=3 PDO">PDO</a>
					</li>
				</ul>
		</div>
		</div>
		<?php } ?>
	</div>
</div>
	</main>
	</div>
	</section>
	<footer>
		<div class="container row">
			Copyright <?php echo date ('y'); ?> - TI Mendes em memória de: Xandão
		</div>
	</footer>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>