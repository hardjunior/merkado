<?php 
include_once "traducao.php";
	// use Src\About;
	// include_once "route.php";
	// include_once "src/home.php";
	// include_once "src/about.php";
	// include_once "src/contact.php";
	
	// $route = new Route();

	// $route->add("/", function (){
	// 	echo "this is home";
	// });
	// $route->add("/about", function (){
	// 	echo "this is about";
	// });
	// $route->add("/contact", function () {
	// 	echo "this is contact";
	// });

	// $route->submit();

	// exit;

defined('URL') || define('URL', $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']);

?>
<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="pt-br" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="pt-br" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="pt-br">
<!--<![endif]--> 
<?php include_once "cabecalho.php"; ?>

<body>
	<?php include_once "nav.php"; 

	 include_once "carousel.php";

	 include_once "informacao.php"; ?>

	<div class='conteudo' id='conteudo'>
	
	<?php
	$none = (empty($_GET['menu']))?"d-none":'';
		echo "<div class='ementa $none'>";
			include_once "ementa.php";
		echo "</div>";
	
	$none = (empty($_GET['take']))?"d-none":'';
		echo "<div class='take $none'>";
			include_once "take.php";
		echo "</div>";
	?>
		
		<div class='contacto d-none'>
			<?php include_once "contacto.php"; ?>
		</div>
		<div class='privacidade d-none'>
			<?php include_once "../privacidade.php"; ?>
		</div>
		
	</div>

	<!-- sobre nos-->

	<!-- Serviços -->

	<!-- cardapio -->

	<!-- contadores -->

	<!-- prato do chefe-->

	<!-- galeria de fotos-->

	<!-- nossos produtos-->

	<!-- testemunhos -->

	<!-- blog -->

	<!-- reserva -->

<div class='modal-show'></div>

	<?php include_once "footer.php"; ?>
</body>

</html>