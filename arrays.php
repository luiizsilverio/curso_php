<?php 
		include 'header.php';
		$aula_atual = 'arrays';
	?>


	<body>

		<h2>ARRAYS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

    <h3>Meus Cursos</h3>

      <?php $languages = array("Excel", "HTML-CSS", "Python"); ?>

      <h4>Linguagens de programação:</h4>
      <p><?php echo $languages[0] . ', ' . $languages[1] . ', ' . $languages[2]; ?></p>

			<?php $cursos = array(
								"Excel" => array(
									"n_alunos" => 400,
									"titulo" => "Do zero ao avançado",
									"url" => "http://udemy.com",
									"aval" => 200
								),
								"HTML/CSS" => array(
									"n_alunos" => 300,
									"titulo" => "Aprenda a desenvolver um site",
									"url" => "http://udemy.com",
									"aval" => 150
								),
								"Python" => array(
									"n_alunos" => 250,
									"titulo" => "Domine o Python",
									"url" => "http://udemy.com",
									"aval" => 90
								)
							); ?>

		<h3>Informação do Curso</h3>

			<h4>Título: </h4>
			<p><?php echo $cursos['Excel']['titulo']; ?></p>
			<br>

			<h4>Número de Avaliações: </h4>
			<p><?php echo $cursos['Excel']['aval']; ?></p>
			<br>

			<h4>Número de alunos: </h4>
			<p><?php echo $cursos['Excel']['n_alunos']; ?></p>
			<br>

			<h4>URL: </h4>
			<p><?php echo $cursos['Excel']['url']; ?></p>
			<br>
		

		<h3>Agora é a sua vez</h3>

			<p>Crie um Array e solte as suas informações em sequência. Pesquise também funções que podem ser aplicadas neste tipo de dados.</p>
			<br>

      <?php $contatos = array(
                          array(
                            "nome" => "Maria Ap.",
                            "email" => "maria@gmail.com",
                            "tel" => "19 9991-1119"
                          ),
                          array(
                            "nome" => "Zé das Couves",
                            "email" => "ze@gmail.com",
                            "tel" => "19 9995-5559"
                          ),
                          array(
                            "nome" => "João Ninguém",
                            "email" => "joao@gmail.com",
                            "tel" => "19 9997-7779"
                          )
                        ) ?>

      <h4>Contatos</h4>

      <?php foreach ($contatos as $contato) { ?>
          <h4>Nome: </h4>
			    <p><?php echo $contato['nome']; ?></p>
			    <br />
          <h4>E-mail: </h4>
			    <p><?php echo $contato['email']; ?></p>
          <br />
          <h4>Telefone: </h4>
			    <p><?php echo $contato['tel']; ?></p>
          <br />
      <?php } ?>

			<br>


		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>