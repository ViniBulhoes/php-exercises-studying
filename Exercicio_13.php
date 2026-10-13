<?php

// Desafio 13: O Sistema da Conta Bancária

// O Cenário:
// Você está desenvolvendo o módulo financeiro de um sistema e precisa criar uma classe para gerenciar contas de clientes.

// Sua tarefa:
// Escreva uma classe em PHP chamada ContaBancaria que contenha:

// Dois Atributos (públicos):
// $titular (para guardar o nome da pessoa)
// $saldo (para guardar o dinheiro, começando em 0 por padrão ou recebendo um valor inicial)

// Um Método Construtor (__construct):
// Deve receber por parâmetro o nome do $titularRecebido e opcionalmente um $saldoInicial 
// (você pode definir $saldoInicial = 0 para caso não passem nada).
// Deve atribuir esses valores aos atributos $this->titular e $this->saldo.

// Um Método chamado consultarSaldo():
// Deve retornar uma frase formatada, por exemplo: "O saldo atual de [Nome] é R$ [Saldo]".

    class ContaBancaria {
        public $titular;
        public $saldo;

        public function __construct ($titularRecebido, $saldoInicial) {
            $this->titular = $titularRecebido;
            $this->saldo = $saldoInicial;
        }

        public function consultarSaldo() {
            echo "O saldo atual de " . $this->titular . " é R$ " . $this->saldo . ". <br>";
        }

        public function depositar($valorDepositado) {
            $this->saldo = $this->saldo + $valorDepositado;
            echo "Depósito recebido no valor de: " . $valorDepositado . "<br>"; 
        }

        public function sacar($valorSacado) {
            $this->saldo = $this->saldo - $valorSacado;
            echo "Saque registrado no valor de: " . $valorSacado . "<br>";
        }
    };

// Avançando no Desafio 13: Criando Ações (Métodos de Modificação)
// Uma conta bancária de verdade não serve só para consultar saldo, certo? Precisamos conseguir mexer nesse dinheiro.

// Sua próxima tarefa:
// Adicione mais dois métodos dentro da sua classe ContaBancaria:

// Um método chamado depositar($valor) que vai somar o valor recebido ao $this->saldo.

// Um método chamado sacar($valor) que vai subtrair o valor recebido do $this->saldo.

    $teste = new ContaBancaria("Pedro", 2000);
    $teste -> consultarSaldo();

    $teste -> depositar(300);
    $teste -> consultarSaldo();

    $teste -> sacar(800);
    $teste -> consultarSaldo();

?>