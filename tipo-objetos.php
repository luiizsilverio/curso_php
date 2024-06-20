<?php 
		include 'header.php';
		$aula_atual = 'tipo-objetos';
	?>


	<body>

		<h2>OBJETOS</h2>
		<hr>
		<small>Curso de Básico de PHP - Prof. Ivan Lourenço Gomes</small>



		<h3>Propriedades</h3>

    <?php

      class carro {
        private $ano;
        private $modelo;
        private $placa;
        private $cpf_dono;

        function __construct($ano, $modelo, $placa, $cpf) {
          $this->ano = $ano;
          $this->modelo = $modelo;
          $this->placa = $placa;
          $this->cpf_dono = $cpf;
        }

        public function mostrar_info() {
          echo 'Ano: ' . $this->ano . '<br>';
          echo 'Modelo: ' . $this->modelo . '<br>';
          echo 'Placa: ' . $this->placa . '<br>';
        }

        public function get_cpf() {
          return $this->cpf_dono;
        }

        public function set_cpf($cpf) {
          $this->cpf_dono = $cpf;
        }

      }

      $carro1 = new carro(2013, 'Clio', 'FMH2020', '1919191913');
    ?>

		<h4>Propriedades do Objeto Carro1: </h4>

		<pre>
      <?php 
        $carro1->mostrar_info();
        echo '<br>';
        echo $carro1->get_cpf();
        $carro1->set_cpf('111.222.333-4');
        echo '<br>';
        echo $carro1->get_cpf();
      ?>
    </pre>

		<h3>Métodos</h3>

		<h4>Dono do Carro1: </h4>
		<p></p>
		<br>
		
		<h4>---------- Troca do dono do carro ----------</h4>

		<br>

		<h4>Novo Dono do Carro1: </h4>
		<p></p>




		

		
	






		<?php include 'functions/bottom_index.php'; ?>


	</body>

</html>