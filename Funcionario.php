<?php
class Funcionario {
    private $nome;
    private $sobrenome;
    private $horasTrabalhadas;
    private $valorPorHora;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function setHorasTrabalhadas($horas) {
        $this->horasTrabalhadas = $horas;
    }

    public function setValorPorHora($valor) {
        $this->valorPorHora = $valor;
    }

    public function nomeCompleto() {
        return $this->nome . " " . $this->sobrenome;
    }

    public function calcularSalario() {
        return $this->horasTrabalhadas * $this->valorPorHora;
    }

    public function incrementarHoras($horas) {
        $this->horasTrabalhadas += $horas;
    }
}

class TestarFuncionario {
    public static function main() {
        $novoFuncionario = new Funcionario();
        $novoFuncionario->setNome("Luis");
        $novoFuncionario->setSobrenome("Silva");
        $novoFuncionario->setHorasTrabalhadas(10);
        $novoFuncionario->setValorPorHora(25.50);

        echo "Nome Completo: " . $novoFuncionario->nomeCompleto() . "\n";
        echo "Salário: R$ " . $novoFuncionario->calcularSalario() . "\n";

        $novoFuncionario->incrementarHoras(8);
        echo "Salário após incrementar horas: R$ " . $novoFuncionario->calcularSalario() . "\n";
    }
}

TestarFuncionario::main();
?>
