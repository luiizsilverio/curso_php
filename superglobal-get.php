﻿	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'superglobal-get';
	?>


	<body>


		<h2>Variável Superglobal $_GET</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		

		<h3>$_GET</h3>


		<pre><?php print_r($_GET); ?></pre>

		<p><?php echo $_GET['item']; ?></p>
    <br>
		<p><?php echo $_GET['nome']; ?></p>
    <br>


		<?php 
			$produtos = array(
						
						'1' => array ('nome' => 'Big Mac',
									  'descricao' => 'O sanduíche duplo mais cobiçado no mundo inteiro. Feito com dois suculentos hambúrgueres 100% carne de vaca, queijo fundido, pepino, cebola, alface e um molho irresistível. Uma combinação única.',
									  'calorias' => 503
						),

						'2' => array ('nome' => 'Hamburger',
									  'descricao' => 'Simplesmente delicioso. Um hambúrguer 100% carne de vaca com pepino, cebola, mostarda e ketchup, aconchegado em dois pedaços de pão fofo e leve. Um clássico que sabe bem a qualquer hora.',
									  'calorias' => 254
						),

						'3' => array ('nome' => 'Cheeseburger',
									  'descricao' => 'O hambúrguer McDonald\'s encontrou uma fatia de queijo delicioso. A eles juntaram-se o pepino, a cebola, a mostarda e o ketchup. Estão reunidos os ingredientes para uma verdadeira festa de sabor.',
									  'calorias' => 304
						),

						'4' => array ('nome' => 'McRoyal Deluxe',
									  'descricao' => 'Coroado com sementes de sésamo, o McRoyal Deluxe tem todos os ingredientes para uma dentada luxuosa: carne 100% de vaca, rodelas de tomate, queijo Cheddar fundido e maionese aveludada.',
									  'calorias' => 528
						),

						'5' => array ('nome' => 'McRoyal Cheese',
									  'descricao' => 'O que mais se pode pedir? Todo o paladar do McRoyal com uma dupla camada de queijo Cheddar fundido. Ideal para os amantes de queijo.',
									  'calorias' => 521
						)

          ); 

      $item = $_GET['item'];
		?>

		<h4>Produto: </h4>
		<p>
      <?php echo $produtos[$item]['nome']; ?>
    </p>
		<br>
		
		<h4>Descrição: </h4>
		<p><?php echo $produtos[$item]['descricao'];  ?></p>
		<br>
		
		<h4>Calorias: </h4>
		<p><?php echo $produtos[$item]['calorias'];  ?></p>
		<br>

		<h4><u>Conheça nossos produtos</u></h4><br>
		
		<ul>	
      <?php foreach ($produtos as $chave => $item) { ?>
        <li>
          <a href="<?php echo "superglobal-get.php?item=$chave"; ?>">
            <?php echo $chave . ' - ' . $item['nome']; ?>
          </a>
        </li>
      <?php } ?>
		</ul>



		<h3>Agora é a sua vez</h3>

		<p>Trabalhe com o array de camisetas. Passe o código do produto via URL, e use a variável $_GET para apresentar o nome do produto e os tamanhos disponíveis.</p>

		<?php

			$itens = array (
						'shirt_avg' =>  array (
											'nome' => 'Camiseta Avengers',
											'tamanhos' => array('XS','S', 'M','L', 'XL')
										),
						'shirt_batman' =>  array (
											'nome' => 'Camiseta Batman',
											'tamanhos' => array('S', 'M','L', 'XL')
										),
						'jacket_superman' =>  array (
											'nome' => 'Casaco Superman',
											'tamanhos' => array('M','L', 'XL', 'XXL')
										),
			);

      $shirt = $_GET['shirt'];
		?>

		
		<br>

		<h4>Produto: </h4>
		<p><?php echo $itens[$shirt]['nome']; ?></p>
		<br>

		<h4>Tamanhos disponíveis: </h4>
		<p>
      <?php
        $tamanhos = $itens[$shirt]['tamanhos']; 

        foreach ($tamanhos as $item) {
          echo $item . ' ';
        }
      ?>
    </p>

    <br>
		<h4><u>Conheça nossos produtos</u></h4><br>
		
		<ul>	
      <?php foreach ($itens as $chave => $valor) { ?>
        <li>
          <a href="<?php echo 'superglobal-get.php?shirt=' . $chave; ?>">
            <?php echo $valor['nome']; ?>
          </a>
        </li>
      <?php } ?>
		</ul>



		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>