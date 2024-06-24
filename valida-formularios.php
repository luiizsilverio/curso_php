	<?php 
		include 'header.php';
		$aula_atual = 'valida-formularios';
	?>

  <?php

    function clear_input($data) {
      $clean_data = trim($data);
      $clean_data = stripslashes($clean_data); // retira barras invertidas
      $clean_data = htmlspecialchars($clean_data); // retira certos caracteres especiais, como <
      
      return $clean_data;
    }

    function insert_cliente($nome, $email) {
      $server = 'localhost';
			$user = 'root';
			$password = 'root';
			$db_name = 'curso_php';
			$port = 3306;
    
			try {

				$db_connect = new mysqli($server, $user, $password, $db_name, $port);

				$sql = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email');";

				if ($db_connect->query($sql)) {
          $msg_envio = 'Formulário enviado com sucesso.';
        }
        else {
					$msg_envio = 'falha no envio dos dados';
				}

			} 
			catch (Throwable $e) {
				$msg_envio = 'falha no envio dos dados: ' . $e->getMessage();
			}

      return $msg_envio;
    }

  ?>

	<body>


		<h2>Formulários</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

    <h3>Envie seus dados</h3>
		
    <pre><?php echo($_SERVER['REQUEST_METHOD']); ?></pre>

    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // echo 'O formulário foi preenchido.';
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        if ($nome == "") {
          $erro_nome = 'O nome é obrigatório';
        } 
        elseif ($email == "") {
          $erro_email = 'O e-mail é obrigatório';
        } 
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $erro_email = 'E-mail inválido';
        } 
        else {
          $nome = clear_input($nome);
          $email = clear_input($email);

          $msg_envio = insert_cliente($nome, $email);

          if (str_contains($msg_envio, 'sucesso')) {
            $nome = NULL;
            $email = NULL;
          }
        }
      }
    ?>

		<form action="valida-formularios.php" method="post">
			
			Nome: *
			<br>
			<input type="text" name="nome" class="field" value="<?php echo $nome; ?>">
			<br>
      <div class="erro-form">
        <?php echo $erro_nome; ?>
      </div>  
      <br>
			
			E-mail: *
			<br>
			<input type="text" name="email" class="field" value="<?php echo $email; ?>">
			<br>
      <div class="erro-form">
        <?php echo $erro_email; ?>
      </div>  
      <br>

			<input type="submit" name="submit" class="submit">
      <div class="sucesso-form">
        <?php echo $msg_envio; ?>
      </div>  
      <br>

		</form>


		<h3>Confirmaçao</h3>
		<pre><?php print_r($_POST); ?></pre>
    <p><?php echo $nome; ?></p>
    <br>
    <p><?php echo $email; ?></p>

		



		

		

		
		








		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>