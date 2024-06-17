<?php 
		include 'header.php';
		$aula_atual = 'variaveis';
	?>


	<body>

		<h2>VARIÁVEIS E CONSTANTES</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>
		<br>

		<h3>Apresentar valor de variáveis</h3>

		<?php 
      $nome = 'Luiz';
      $saldo = 675.50;
		?>

		<h4>Nome: </h4>
		<p><?php echo $nome ?></p>
		<br>

		<h4>Saldo: </h4>
		<p><?php echo "R$ $saldo"; ?></p>
		<br>

    <?php define('idade', 25); ?>
		<h4>Idade: </h4>
    <p><?php echo idade ?></p>
    <br>
    
		<h4>Mensagem: </h4>
		<p><?php echo "Olá $nome, o seu saldo é R$ $saldo"; ?></p>
		

			




		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>