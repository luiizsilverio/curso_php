<?php 
		include 'header.php';
		$aula_atual = 'condicionais';
	?>


	<body>

		<h2>CONDICIONAIS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<h3>Selecione o produto:</h3>

		<?php 

			$produtos = array(
							array(
									'nome' => 'Laptop Lenovo Ideapad Core i7 32GB',
									'estoque' => 12
							),

							array(
									'nome' => 'Laptop ASUS X441NA3350 Celeron N3350 16GB',
									'estoque' => 6
							),

							array(
									'nome' => 'Laptop HP BS013DX Core i5 8GB',
									'estoque' => 1
							),

							array(
									'nome' => 'Dell Inspiron I7373 Core i7 8GB',
									'estoque' => 0
							)		

			)

		?>

		<select>
			<option>Nenhum produto selecionado</option>

			<?php foreach ($produtos as $item) { ?>

        <option <?php if ($item['estoque'] <= 0) {echo 'disabled';} ?> >
          <?php 
            echo $item['nome']; 
            
            $qtd = $item['estoque'];

            if ($qtd <= 0) {
              echo ' (indisponível)';
            } elseif ($qtd == 1) {
              echo ' (última unidade em estoque)';
            } else {
              echo " ($qtd em estoque)";
            } 
          ?>
        </option>

			<?php } ?>
			
		</select>

			

		<h3>Agora é a sua vez</h3> 

		<p>Apague todo o código acima e tente recriá-lo desde o começo. Crie um array com outros produtos, faça o loop foreach para criar o select box e depois use os condicionais para desabilitar os itens que não estão em estoque.</p><br>

    <br>

		<h3>Selecione o veículo usado:</h3>

    <?php
      $carros = array(
                  array(
                    'nome' => 'Fiat Uno',
                    'valor' => 7000 
                  ),
                  array(
                    'nome' => 'Hyundai HB20',
                    'valor' => 50000
                  ),
                  array(
                    'nome' => 'Audi Q3',
                    'valor' => 350000
                  )
                )
    ?>

    <select>
			<option>Nenhum veículo selecionado</option>

      <?php foreach ($carros as $carro) { ?>

        <option <?php if ($carro['valor'] > 100000) {echo 'disabled';} ?> >
          <?php 
            $nome = $carro['nome'];
            echo $nome;
            if ($carro['valor'] > 100000) {
              echo ' (muito caro para você)';
            } elseif ($carro['valor'] < 10000) {
              echo ' (barato)';
            } else {
              echo ' (dá para comprar)';
            }
          ?>
        </option>
      
      <?php } ?>

    </select>
      

		<?php include 'functions/bottom_index.php'; ?>

	</body>

</html>