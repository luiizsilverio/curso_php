<?php 
		include 'header.php';
		$aula_atual = 'operacoes-arrays';
	?>


	<body>

		<h2>OPERAÇÕES COM ARRAYS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		<?php

			$alunos = array (
				array (
					'matricula' => '98855',
					'nome' => 'João Fernando Oliveira',
					'ano_nasc' => 1980,
					'cidade' => 'São Paulo'
				),

				array (
					'matricula' => '98844',
					'nome' => 'Letícia Maria Gomes',
					'ano_nasc' => 1992,
					'cidade' => 'Teresópolis'
				),
				array (
					'matricula' => '98840',
					'nome' => 'Carlos Henrique Matos',
					'ano_nasc' => 1976,
					'cidade' => 'Belo Horizonte'
				),
				array (
					'matricula' => '98837',
					'nome' => 'Fernando Costa',
					'ano_nasc' => 1996,
					'cidade' => 'São Paulo'
				)			
			);
		?>

		<h3>Array Push</h3>
			
		<?php 

      $aluno_novo = array();
      $aluno_novo['matricula'] = '34530';
      $aluno_novo['nome'] = 'Luiz Oliveira';
      $aluno_novo['ano_nasc'] = 1994;
      $aluno_novo['cidade'] = 'Campinas';

      array_push($alunos, $aluno_novo);

      echo '<pre>';
      print_r($alunos);
      echo '</pre>';
		?>


		<h4>Alunos Nascidos depois de 1990: </h4>
		<br>
		
		<?php

      $alunos_90 = array();

      foreach ($alunos as $aluno) {
        if ($aluno['ano_nasc'] >= 1990) {
          $matricula = $aluno['matricula']; 
          $alunos_90[$matricula] = array();
          $alunos_90[$matricula]['nome'] = $aluno['nome'];
          $alunos_90[$matricula]['ano_nasc'] = $aluno['ano_nasc'];
        }
      }
			
      echo '<pre>';
      print_r($alunos_90);
      echo '</pre>';
		?>
		

		<h3>Array Keys</h3>

		<h4>Matrícula dos Alunos Nascidos depois de 1990: </h4>
		<br>
		
		<?php 
      echo '<pre>';
      print_r(array_keys($alunos_90));
      echo '</pre>';
		?>

		
		<h3>In Array</h3>

		<?php 
			$matricula = '98837'; 
			$matricula2 = '98844';

			function dados_aluno($cod) {
        global $alunos_90;

				if (in_array($cod, array_keys($alunos_90))) {
          echo 'A matrícula ' . $cod . ' pertence a(o) aluno ' . $alunos_90[$cod]['nome'] .
            ', nascido(a) no ano de ' . $alunos_90[$cod]['ano_nasc'] . '.';		
        } else {
					echo 'A matrícula ' . $cod . ' não foi encontrada.';
        }		
        echo '<br>';
      }
		?>

		<h4>Busca de aluno por matrícula: </h4>
		<br>
		<p>
			<?php 
        dados_aluno($matricula);
        dados_aluno($matricula2);
        dados_aluno('99999');
			?>
		</p>



		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>