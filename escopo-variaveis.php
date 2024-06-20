	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'escopo-variaveis';
	?>


	<body>


		<h2>ESCOPO DAS VARIÁVEIS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		<h3>Escopo Global x Escopo Local</h3>

			<?php
				
        $num = 10;

        function print_num() {
          global $num;
          static $valor;

          $num += 1;
          $valor += 2;

          echo $num;
          echo '<br>';
          echo $valor;
          echo '<br>';
        }

			?>

			<p>
        <?php 
          print_num();  
          print_num();  
        ?>	
			</p><br>

			<p>
        <?php 
          echo $num;
        ?>	
			</p><br>

			

			


		


		<br><br>
		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>