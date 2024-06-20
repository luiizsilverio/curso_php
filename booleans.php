<?php 
		include 'header.php';
		$aula_atual = 'booleans';
	?>


	<body>

		<h2>BOOLEANS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<h3>True ou False?</h3><br>
		
    <?php $teste = 3 !== 3.0; ?>

		<p><?php echo var_dump($teste); ?></p>








		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>