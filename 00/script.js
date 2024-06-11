class Conta {
    constructor(numero, saldo = 0) {
        this.numero = numero;
        this.saldo = saldo;
    }

    sacar(valor) {
        if(this.saldo >= valor && valor > 0) {
            this.saldo -= valor;
            return true
        } else {
            return false;
        }
    }

    depositar(valor) {
        if(valor > 0) {
            this.saldo += valor;
        }
    }

    // Transferir (conta)
    transferir(valor, contaDestino) {
        if(this.sacar(valor)) {
            contaDestino.depositar(valor);
        }
    }

    toString() {
        return `Numero: ${this.numero} - Saldo: ${this.saldo}`;
    }
}

class ContaCorrente extends Conta {
    constructor(numero, saldo = 0, limiteChequeEspecial = 200) {
        super(numero, saldo);
        this.limiteChequeEspecial = limiteChequeEspecial;
    }

    sacar(valor) {
        //super.sacar(valor);
        const valorDisponivelSaque = this.saldo + this.limiteChequeEspecial;

        if(valor > 0 && valorDisponivelSaque >= valor) {
            this.saldo -= valor;
        } else {
            console.log("Saldo insuficiente");
        }
    }
}

class ContaPoupanca extends Conta {    
    constructor(numero, saldo = 0, taxaRendimento = 0.2) {
        super(numero, saldo)
        this.taxaRendimento = taxaRendimento;
    }

    aplicarRendimento() {
        console.log("Rendimento aplicado");
    }
}

let contaC = new ContaCorrente(2001, 500);
let contaP = new ContaPoupanca(2002, 500);

console.log(contaC.toString());
contaC.sacar(650);
console.log(contaC.toString());

contaP.aplicarRendimento();
//contaC.aplicarRendimento(); # erro por não existir função nessa classe

contaP.transferir(200, contaC);
console.log(contaC);
console.log(contaP);