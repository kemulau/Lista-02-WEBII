<?php
class Cachorro {
    private $nome;
    private $raca;

    public function __construct($nome, $raca) {
        $this->nome = $nome;
        $this->raca = $raca;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function setRaca($raca) {
        $this->raca = $raca;
    }
}

echo "Digite o nome do primeiro cachorro: ";
$nome1 = "Tequila"; 
echo "Digite a raça do primeiro cachorro: ";
$raca1 = "Bulldog Francês"; 
$cachorro1 = new Cachorro($nome1, $raca1);

echo "Digite o nome do segundo cachorro: ";
$nome2 = "Vilma"; 
echo "Digite a raça do segundo cachorro: ";
$raca2 = "Poodle"; 
$cachorro2 = new Cachorro($nome2, $raca2);

echo "Cachorro 1: Nome - " . $cachorro1->getNome() . ", Raça - " . $cachorro1->getRaca() . "\n";
echo "Cachorro 2: Nome - " . $cachorro2->getNome() . ", Raça - " . $cachorro2->getRaca() . "\n";

echo "Digite um novo nome para o primeiro cachorro: ";
$novoNome1 = "Polly"; 
$cachorro1->setNome($novoNome1);

echo "Digite uma nova raça para o segundo cachorro: ";
$novaRaca2 = "Chow Chow"; 
$cachorro2->setRaca($novaRaca2);

echo "Cachorro 1 (Atualizado): Nome - " . $cachorro1->getNome() . ", Raça - " . $cachorro1->getRaca() . "\n";
echo "Cachorro 2 (Atualizado): Nome - " . $cachorro2->getNome() . ", Raça - " . $cachorro2->getRaca() . "\n";
?>
