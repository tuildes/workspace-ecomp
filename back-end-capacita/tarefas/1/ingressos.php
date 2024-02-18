<?php

// Classe de ingressos básico
class Ingresso {

    // Variáveis de construção do ingresso
    private String $nomeEvento;
    private String $local;
    private int $preco;
    private bool $meiaEntrada;

    // Funções de manipulação do ingresso
    public function trocarMeiaEntrada () {
        $this->meiaEntrada = !$this->meiaEntrada;
    }

    public function lerIngresso () {
        echo ("$this->nomeEvento vai ser no $this->local\n");

        if ($this->meiaEntrada) {
            echo ("R$ $this->preco (meiaEntrada)");
        } else  {
            echo ("R$ $this->preco (total)");
        }
        
        echo("\n");
    }

    // Construtor do ingresso;
    function __construct (string $nomeEvento, string $local, int $preco) {
        $this->nomeEvento = $nomeEvento;
        $this->local = $local;
        $this->preco = $preco;
        $this->meiaEntrada = false;
    }
}

?>