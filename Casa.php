<?php
class Casa {
    private $numQuartos;
    private $metrosQuadrados;
    private $numBanheiros;
    private $endereco;

    public function __construct($numQuartos, $metrosQuadrados, $numBanheiros, $endereco) {
        $this->numQuartos = $numQuartos;
        $this->metrosQuadrados = $metrosQuadrados;
        $this->numBanheiros = $numBanheiros;
        $this->endereco = $endereco;
    }

    public function getNumQuartos() {
        return $this->numQuartos;
    }

    public function setNumQuartos($numQuartos) {
        $this->numQuartos = $numQuartos;
    }

    public function getMetrosQuadrados() {
        return $this->metrosQuadrados;
    }

    public function setMetrosQuadrados($metrosQuadrados) {
        $this->metrosQuadrados = $metrosQuadrados;
    }

    public function getNumBanheiros() {
        return $this->numBanheiros;
    }

    public function setNumBanheiros($numBanheiros) {
        $this->numBanheiros = $numBanheiros;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
}

// Testando a classe Casa
echo "Digite o número de quartos da primeira casa: ";
$numQuartos1 = (int)trim(fgets(STDIN));
echo "Digite os metros quadrados da primeira casa: ";
$metrosQuadrados1 = (float)trim(fgets(STDIN));
echo "Digite o número de banheiros da primeira casa: ";
$numBanheiros1 = (int)trim(fgets(STDIN));
echo "Digite o endereço da primeira casa: ";
$endereco1 = trim(fgets(STDIN));

$casa1 = new Casa($numQuartos1, $metrosQuadrados1, $numBanheiros1, $endereco1);

echo "Digite o número de quartos da segunda casa: ";
$numQuartos2 = (int)trim(fgets(STDIN));
echo "Digite os metros quadrados da segunda casa: ";
$metrosQuadrados2 = (float)trim(fgets(STDIN));
echo "Digite o número de banheiros da segunda casa: ";
$numBanheiros2 = (int)trim(fgets(STDIN));
echo "Digite o endereço da segunda casa: ";
$endereco2 = trim(fgets(STDIN));

$casa2 = new Casa($numQuartos2, $metrosQuadrados2, $numBanheiros2, $endereco2);

echo "Detalhes da primeira casa:\n";
echo "Quartos: " . $casa1->getNumQuartos() . "\n";
echo "Metros quadrados: " . $casa1->getMetrosQuadrados() . "\n";
echo "Banheiros: " . $casa1->getNumBanheiros() . "\n";
echo "Endereço: " . $casa1->getEndereco() . "\n";

echo "Detalhes da segunda casa:\n";
echo "Quartos: " . $casa2->getNumQuartos() . "\n";
echo "Metros quadrados: " . $casa2->getMetrosQuadrados() . "\n";
echo "Banheiros: " . $casa2->getNumBanheiros() . "\n";
echo "Endereço: " . $casa2->getEndereco() . "\n";
?>
