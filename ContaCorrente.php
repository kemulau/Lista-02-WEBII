<?php
class ContaCorrente {
    private $saldo;

    public function definirSaldoInicial($valor) {
        $this->saldo = $valor;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente para saque.";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

class TestarContaCorrente {
    public static function main() {
        $novaConta = new ContaCorrente();
        $novaConta->definirSaldoInicial(1000);
        echo "Saldo inicial: " . $novaConta->getSaldo() . "\n";

        $novaConta->sacar(500);
        echo "Saldo após saque de 500: " . $novaConta->getSaldo() . "\n";

        $novaConta->depositar(50);
        echo "Saldo após depósito de 50: " . $novaConta->getSaldo() . "\n";

        $novaConta->sacar(600);
        echo "Saldo após saque de 600: " . $novaConta->getSaldo() . "\n";
    }
}

TestarContaCorrente::main();
?>
