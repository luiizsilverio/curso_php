<?php 
		include 'header.php';
		$aula_atual = 'numeros';
	?>


	<body>

		<h2>NÚMEROS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>



		<h3>Operadores Aritméticos</h3>

		<h4>Escreva a operação:</h4>
			<p>1 + (2**3) = <?php echo 1+(2**3); ?></p><br/>
			<p>7 % 2 = <?php echo 7%2; ?></p>
			<br>
		
		
		<h3>Cálculo da Fatura</h3>

		<?php	
			// Informações da compra
			$quant = 60;
			$preco = 29.00;
			$cod = "330745";

			// Cálculo do total
      $total = $quant * $preco;     

		?>

			<table>
				<tr>
					<th>Produto</th>
					<th>Quantidade</th>
					<th>Preço</th>
					<th>Total</th>
				</tr>
				<tr>
					<td><?php echo $cod; ?></td>
					<td><?php echo $quant; ?></td>
					<td><?php echo number_format($preco,2,",","."); ?></td>
					<td><?php echo number_format($total,2,",","."); ?></td>
				</tr>
			</table>

		<h3>Funções matemáticas</h3>

			<?php
				$num1 = 1450.36655;
				$num2 = 289;
			?>

			<h4>Arredondar:</h4>
			<p><?php echo round($num1); ?></p>
			<br>

			<h4>Arredondar para cima:</h4>
			<p><?php echo ceil($num1); ?></p>
			<br>

			<h4>Arredondar para baixo:</h4>
			<p><?php echo floor($num1); ?></p>
			<br>




		<h3>Agora é a sua vez</h3>

			<p>Pesquise outros operadores aritméticos e funções matemáticas em PHP e use este espaço para testá-los.</p>
			<br>
      <h4>Números Aleatórios</h4>
      <p><?php echo rand(1, 100); ?>,</p>
      <p><?php echo rand(1, 100); ?>,</p>
      <p><?php echo rand(1, 100); ?>,</p>
      <p><?php echo rand(1, 100); ?></p>
      <br/>

      
		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>