<?php
class Censo {
    private $qtdMulheres;
    private $qtdHomens;
    private $maiorAltura;
    private $menorAltura;
    private $mediaAlturaHomens;

    public function __construct() {
        $this->qtdMulheres = 0;
        $this->qtdHomens = 0;
        $this->maiorAltura = 0.0;
        $this->menorAltura = PHP_FLOAT_MAX;
        $this->mediaAlturaHomens = 0.0;
    }

    public function realizarCenso() {
        $totalPessoas = readline("Informe o número total de pessoas: ");

        $alturaTotalHomens = 0;

        for ($i = 0; $i < $totalPessoas; $i++) {
            $sexo = readline("Informe o sexo (M/F): ");
            $altura = (float) readline("Informe a altura: ");

            if ($sexo === 'M') {
                $this->qtdHomens++;
                $alturaTotalHomens += $altura;
            } else {
                $this->qtdMulheres++;
            }

            if ($altura > $this->maiorAltura) {
                $this->maiorAltura = $altura;
            }

            if ($altura < $this->menorAltura) {
                $this->menorAltura = $altura;
            }
        }

        if ($this->qtdHomens > 0) {
            $this->mediaAlturaHomens = $alturaTotalHomens / $this->qtdHomens;
        }
    }

    public function imprimirResultados() {
        echo "Quantidade de Mulheres: " . $this->qtdMulheres . "\n";
        echo "Quantidade de Homens: " . $this->qtdHomens . "\n";
        echo "Maior Altura: " . $this->maiorAltura . "\n";
        echo "Menor Altura: " . $this->menorAltura . "\n";
        echo "Média de Altura dos Homens: " . $this->mediaAlturaHomens . "\n";
    }
}

$censo = new Censo();
$censo->realizarCenso();
$censo->imprimirResultados();
?>
