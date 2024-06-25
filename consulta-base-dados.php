<?php 
		include 'header.php';
		$aula_atual = 'consulta-base-dados';
	?>



	<body>


		<h2>Consulta à base de dados</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		<h3>Dados dos clientes</h3>


		
		<?php 

			$server = 'localhost';
			$user = 'root';
			$password = 'root';
			$dbname = 'curso_php';
			$port = '3306';

			$db_connect = new mysqli($server, $user, $password, $dbname, $port);

			if ($db_connect->connect_error == true) {
				echo 'Não foi possível conectar à base de dados.';
			} 

        $sql = "SELECT * FROM clientes ORDER BY nome;";
				
        $result = $db_connect->query($sql);

        if (!$result) {
          echo 'falha no envio dos dados';
        }
    ?>

    <table>
      <tr>
        <th>Nome</th>
        <th>E-mail</th>
      </tr>

      <?php
        while ($row = $result->fetch_assoc()) {
          echo '<tr>';
            echo '<td>';
            echo $row['nome'];
          echo '</td>';

          echo '<td>';
            echo $row['email'];
            echo '</td>';
          echo '</tr>';
        }        
      ?>
     
    </table>



		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>