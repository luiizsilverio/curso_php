	<?php 
		include 'header.php';
		include 'functions/functions.php';
		$aula_atual = 'data-hora';
	?>


	<body>


		<h2>Data e Hora</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>

		
		<h3>Epoch</h3>

		<p>Unix Epoch -> 01 Jan 1970 00:00:00 GMT</p><br>

		

		<h3>Função time - segundos desde o Epoch (formato unix timestamp)</h3>

		<p>

			<?php
				$agora = time();
        var_dump($agora);
        echo '<br>';
        echo date("d/m/Y H:i:s", $agora);
			?>
			
		</p>
		<br>

		<h3>Função mktime</h3>

			<?php
				$dtnas = mktime(0, 0, 0, 06, 14, 2024);  // hora min seg mes dia ano
        echo date("d/m/Y", $dtnas);
			?>

		<p>

		</p>
		<br>

		<h3>Função strtotime</h3>

			<?php
				$outra_data = strtotime("30 may 1986");
        echo date("d/m/Y", $outra_data);
        echo '<br>';
        ?>

    <p>
      <?php
        $outra_data = strtotime("now + 4weeks monday");
        echo date("d/m/Y", $outra_data);
      ?>
		</p>
		<br>


		<h3>Função date</h3>

			<?php
				
			?>

		<p>

		</p>
		<br>

		<h3>Fuso horário</h3>

			<?php
        date_default_timezone_set('America/Sao_Paulo');
        echo date_default_timezone_get();
        echo '<br>';
        echo date("d/m/Y H:i:s", $agora);
				
			?>			

		<p>

		</p>
		<br>


		<h3>Cálculos com data e hora</h3>

			<?php
        $data_prevista = strtotime('24 dec 2024');
				$data_entrega = strtotime('26 dec 2024');

        echo 'Data prevista: ' . date("d/m/Y", $data_prevista);
        echo '<br>';
        echo 'Data de entrega: ' . date("d/m/Y", $data_entrega);
        echo '<br>';

        if ($data_entrega > $data_prevista) {
          $atraso = ($data_entrega - $data_prevista) / 60 / 60 / 24;
          echo "Produto entregue com atraso de $atraso dias.";
        } else {
          echo 'Produto entregue no prazo';
        }
			?>

		<p>

		</p>
		<br>


		




		<h3>Tabela de caracteres da função date</h3>

		


		<?php include 'tabela-date.php'; ?>


		










		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>