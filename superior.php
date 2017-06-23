<?php 
$url = basename($_SERVER['PHP_SELF']);
?> 

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
	<meta name="theme-color" content="#233046">
    <title>Number One</title>

</head>    

<body>
	
	<header>
		
		<div id="logoHeader">
			<a href="index.php"><img src="img/logoHeader.png" alt=""></a>
		</div>

		<div id="MenuMobile" onclick="toggleMenu();">
			<img src="img/hamburguer.png" alt="">
		</div>
		
		<nav id="menuHeader" class="inactive">
			<div class="close" onclick="toggleMenu();">X</div>
			<ul>
				
				<li><a <?php if($url == 'sobre.php'){ echo "class = 'menuActive'" ;}?> href="sobre.php">Sobre</a></li>
				<li><a <?php if($url == 'planos.php'){ echo "class = 'menuActive'";}?> href="planos.php">Planos</a></li>
				<li><a <?php if($url == 'parceiros.php'){ echo "class = 'menuActive'";}?> href="parceiros.php">Parceiros</a></li>
				<li><a <?php if($url == 'cotacao.php'){ echo "class = 'menuActive'";}?> href="cotacao.php">Cotação</a></li>
				<li><a <?php if ($url == 'contato.php'){ echo "class = 'menuActive'";}?> href="contato.php">Contato</a></li>

			</ul>

		</nav>
	<script src = "js/menu.js"></script>
	</header>



</body>