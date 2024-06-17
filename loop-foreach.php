<?php 
		include 'header.php';
		$aula_atual = 'loop-foreach';
	?>


	<body>

		<h2>LOOP FOREACH</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		

			<?php 

				$cursos = array(
								array(
									"n_alunos" => 400,
									"titulo" => "Excel do zero ao avançado",
									"url" => "http://www.udemy.com",
									"aval" => 200
								),
								array(
									"n_alunos" => 300,
									"titulo" => "Aprenda Desenvolvimento Web em HTML/CSS",
									"url" => "http://www.udemy.com",
									"aval" => 150
								),
								array(
									"n_alunos" => 280,
									"titulo" => "Programe em Python",
									"url" => "http://www.udemy.com",
									"aval" => 90
								)
				); 
			?>

		<h3>Meus Cursos</h3>

    <ul>
      <?php foreach ($cursos as $item) { ?>
        <li>
          <h4>Curso: </h4>
          <a href="<?php echo $item['url'] ?>"><?php echo $item['titulo']; ?></a>
          <br>
          <h4>No. Alunos: </h4>
          <?php echo $item['n_alunos']  . ' / ' . $item['aval'] . ' avaliações'; ?>
          <br>
        </li>
      <?php } ?>
    </ul>

		<h3>Agora é a sua vez</h3>

			<p>Crie um Array, de preferência multidimensional, e solte as informações de cada item deste array em uma lista usando o loop foreach.</p>
			<br>

		




		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>