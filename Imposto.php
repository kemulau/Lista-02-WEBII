<?php
class Imposto {
    private $valorImposto;
    private $nomeFuncionario;

    public function __construct($nomeFuncionario) {
        $this->nomeFuncionario = $nomeFuncionario;
        $this->valorImposto = 0.0;
    }

    public function calcularImposto($salario) {
        if ($salario <= 2259.29) {
            $this->valorImposto = 0.0;
        } elseif ($salario <= 2828.65) {
            $this->valorImposto = $salario * 0.075;
        } elseif ($salario <= 3751.05) {
            $this->valorImposto = $salario * 0.15;
        } else {
            $this->valorImposto = $salario * 0.225;
        }
        return $this->valorImposto;
    }

    public function getValorImposto() {
        return $this->valorImposto;
    }

    public function getNomeFuncionario() {
        return $this->nomeFuncionario;
    }

}

$funcionario = new Imposto("João Silva");

$salario = 3000; 
echo "Imposto devido: R$ " . $funcionario->calcularImposto($salario) . "\n";
?>
