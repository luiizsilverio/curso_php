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
        } elseif ($email == "") {
          $erro_email = 'O e-mail é obrigatório';
        } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
          $erro_email = 'E-mail inválido';
        } else {
          $nome = clear_input($nome);
          $email = clear_input($email);
        }
      }
    ?>

		<form action="valida-formularios.php" method="post">
			
			Nome: *
			<br>
			<input type="text" name="nome" class="field">
			<br>
      <div class="erro-form">
        <?php echo $erro_nome; ?>
      </div>  
      <br>
			
			E-mail: *
			<br>
			<input type="text" name="email" class="field">
			<br>
      <div class="erro-form">
        <?php echo $erro_email; ?>
      </div>  
      <br>

			<input type="submit" name="submit" class="submit">
      <div class="sucesso-form">
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