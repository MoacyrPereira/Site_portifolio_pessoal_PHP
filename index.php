<?php 
	include('config.php'); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Portifólio</title>

	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script> 
	
	<script src="https://kit.fontawesome.com/774c156290.js" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	
	<link href="estilo/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chaves,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<meta charset="utf-8" />

</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />

	<?php 
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		switch ($url) {
			case 'depoimentos':
				echo '<target target="depoimentos" />';
				break;

			case 'servicos':
				echo '<target target="servicos" />';
				break;
		}
			
			
	?>

	<!--<?php //new Email(); ?>-->

	<header>
	<div class="center">
		<div class="logo left"><a href="index.php">web portifólio</a></div>
		<nav class="desktop right">
			<ul>
				<li><a href="index.php">Home</a></li>
				|
				<li><a href="depoimentos">Games</a></li>
				|
				<li><a href="servicos">Contato</a></li>
				
				

			</ul>
		</nav>

		<nav class="mobile right">
			<div class="botao-menu-mobile">
				<i class="fas fa-bars"></i>
			</div>
			<ul>
				<li><a href="index.php">Home</a><li>
				<li><a href="depoimentos">Games</a></li>
				<li><a href="servicos">Contato</a></li>
				

			</ul>
		</nav>
	</div>
	<div class="clear"></div>
	</header>

	<div class="container-principal">
		<?php 
				
				if(file_exists('pages/'.$url.'.php')){
					include('pages/'.$url.'.php');
				}else{
					if($url != 'depoimentos' && $url != 'servicos'){
						$pagina404 = true;
						include('pages/404.php');
					}else{
						include('pages/home.php');
					}
				}
			?>
	</div>


	<footer>

		<div class="center">
			<p>Todos os direitos reservados</p>
			<p><b>Moacyr Pereira</b></p>
		</div>

	</footer>

	<script src="js/jquery.js"></script>
	
	<script src="js/scripts.js"></script>

	<!--==========PARA RODAR O SLIDER============-->
	
	
	<?php
		if($url == 'home' || $url == ''){
	?>
		<script src="js/slider.js"></script>
	<?php } ?>
	
	
	<script src="js/exemplo.js"></script>
	
</body>
</html>