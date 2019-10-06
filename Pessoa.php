<?php


	class Pessoa {

		public $nome;
		public $dataNascimento;
		public $peso;
		public $altura;
		public $cpf;

		public function __construct($nome, $data, $peso, $altura, $cpf) {
			$this->nome = $nome;
			$this->dataNascimento = $data;
			$this->peso = $peso;
			$this->altura = $altura;
			$this->cpf = $cpf;
		}

		public function validaCpf($cp) {
			if (strlen($cp) != 11) {
				echo "<p>Cpf Invalido!</p>";
			} else {
				echo "<p>Cpf Valido!</p>";
				$this->cpf = $cp;
			}

		}

		public function calculaImc() {
			$calc = ($this->altura * $this->altura)/$this->peso;
			if ($calc < 18.5) {
				echo "Valor do IMC: " . $calc;
				echo "<p>Abaixo do peso</p>";
			}
			if (($calc >= 18.5) && ($calc <= 24.9)) {
				echo "Valor do IMC: " . $calc;
				echo "<p>Peso normal</p>";
			}
			if (($calc >= 25) && ($calc <= 29.9)) {
				echo "Valor do IMC: " . $calc;
				echo "<p>Sobre peso</p>";
			}
			if (($calc >= 30) && ($calc <= 34.9)) {
				echo "Valor do IMC: " . $calc;
				echo "<p>Obesidade grau 1</p>";
			}
			if (($calc >= 35) && ($calc <= 39.9)) {
				echo "Valor do IMC: " . $calc;
				echo "<p>Obesidade grau 2</p>";
			}
			if ($calc > 40) {
				echo "Valor do IMC: " . $calc;
				echo "<p>Obesidade grau 3</p>";
			}
		}

		public function calculaIdade() {
			$dat = $this->dataNascimento;
			list($ano, $mes, $dia) = explode('/', $dat);

			$hoje = mktime(0, 0, 0, date('m'), date('d'), date('y'));
			$nascimento = mktime(0, 0, 0, $mes, $dia, $ano);

			$idade = floor((((($hoje - $nascimento)/60)/60)/24)/365.25);

			echo "Idade: " . $idade;
		}
	}