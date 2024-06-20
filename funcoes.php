	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'funcoes';
	?>


	<body>


		<h2>FUNÇÕES</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>


		<h3>Função simples sem argumento</h3>

    <?php

      function ola_mundo() {
        echo 'Olá mundo!';
        echo '<br>';
        echo 'Fim da função.';
      } 

      ola_mundo();

    ?>

		<h3>Função com argumentos</h3>

    <?php

      function soma($num1, $num2) {
        return ($num1 + $num2);
      }

      echo soma(5, 3);
    ?>

		<h3>Função com argumento e valor default</h3>

    <?php

      function ola_cliente($nome = 'Sr.') {
        echo "Olá, $nome!";
        echo '<br>';
      }

      ola_cliente('João');
      ola_cliente();

    ?>


		<h3>echo ou return?</h3>

    <?php

      function media($num1, $num2) {
        $media = ($num1 + $num2) / 2;
        return $media;
      }

      echo media(10, 3);
    ?>



		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>