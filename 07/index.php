<?php

class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $capacidadeTanque;
    public $totalCombustivel;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->capacidadeTanque = 50;
        $this->totalCombustivel = 0;
    }   

    public function ligar() {
        echo "O $this->modelo agora está ligado  <br>";
    }

    public function desligar() {
        echo "O carro agora está desligado  <br>";
    }

    public function abastecer($totalAbastecido) {
        $this->totalCombustivel += $totalAbastecido;
        echo "Total de combustível do $this->modelo é de $this->totalCombustivel <br>";
    }
}

$meuCarro1 = new Carro("Ford","F-50", 1980);
$meuCarro2 = new Carro("Fiat", "Uno", 2015);

$meuCarro1->ligar();
$meuCarro2->ligar();

$meuCarro1->abastecer(5);
$meuCarro1->abastecer(15);
?>