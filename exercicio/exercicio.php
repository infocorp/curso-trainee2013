<?php
$titulo = $_POST['titulo'];
$h1 = $_POST['h1'];
$paragrafo = $_POST['conteudo'];
?>
<html lang="pt-BR">
<head>
	<title><?php echo $titulo;?></title>
</head>
<body>
	<h1><?php echo $h1;?></h1>
	<p><?php echo $paragrafo;?></p>
</body>
</html>