	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'base-dados-mysql';
	?>


	<body>


		<h2>Bases de Dados MySQL</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>



		<h3>MySQLi</h3>

    <?php 
    
      $server = 'localhost';
			$user = 'root';
			$password = 'root';
			$db_name = 'curso_php';
			$port = 3306;
    
			try {

				$db_connect = new mysqli($server, $user, $password, $db_name, $port);

				echo 'conexão com o banco de dados feita com sucesso.';			
				echo '<br>';

				$sql = "INSERT INTO clientes (nome, email) VALUES ('Fátima', 'fatima@gmail.com');";

				if ($db_connect->query($sql)) {
					echo 'dados inseridos com sucesso';
				} else {
					echo 'falha no envio dos dados';
				}

			} 
			catch (Throwable $e) {
				echo 'falha na conexão: ' . $e->getMessage();
			}

    ?>
		
			


		

		

		


		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>