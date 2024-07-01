
<?php
/*
Defina uma classe veiculo com as seguintes propriedades:
- marca
- modelo
- ano
- ligado (indicando se o veíuclo está ligado ou desligado)

2 - Implemente um método construtor que inicialize marca, modelo e ano.
Por padrão, o veículo é instanciado desligado.
Implemente o método ligar(esse método deve alterar a propriedade "ligado", se o veículo estiver desligado)
Implemente o método desligar(deve desligar se o veículo estiver ligado)
Implemnete o método exibirDados(esse método deve exibir as informações "marca, modelo, ano e ligado")

*/

class Veiculo {
    private $marca;
    private $modelo;
    private $ano;
    private $ligado;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->ligado = false;
    }

    public function ligar() {
        if(!$this->ligado) {
            $this->ligado = true;
        } else {
            echo "Veículo já se encontra ligado!  <br>";
        }
    }

    public function desligar() {
        if($this->ligado) {
            $this->ligado = false;
        }
    }

    public function exibirDados() {
        echo "Veículo marca $this->marca, modelo $this->modelo, ano $this->ano";
        echo $this->ligado ? " está ligado <br>" :  " está desligado <br>";
    }
}

$veiculoTeste = new Veiculo("Chevrolet", "Qualquer", 2000);
$veiculoTeste->exibirDados();
$veiculoTeste->ligar();
$veiculoTeste->ligar();
$veiculoTeste->desligar();
$veiculoTeste->ligar();
$veiculoTeste->ligar();
?>