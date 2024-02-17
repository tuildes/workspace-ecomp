<?php

/**
 *  Objetos é uma forma genérica de se referir a algo que existe, 
 *  Classe é uma especificação do objeto, ela nos diz o que ele é. 
 * 
 *  1 classe para vários objetos
*/ 

/**
 *  Pode-se modificar as classes de 3 formas:
 *      Encapsulamento
 *      Herança
 *      Polimorfismo
 * 
 *      Public - pode ser acessado livremente
 *      Private - so pode ser usado dentro da definicao da classe e manipulado por elas
 *      Protected - private por herdeiros
 * 
 *  Herança -> criação e classes relacionadas entre si -> evitar repetição e ter relação entre si
 */

// Classe
class Musica {
    private String $musica;
    private String $album;
    private String $artista;
    private bool $disponivel;

    // Métodos - ações que mudam as classes
    /* Troca se a música está disponível */
    public function trocar_disponivel () {
        $this->disponivel = !$this->disponivel;
    }

    // Criar um objeto com a classe -> __construct()
    function __construct(string $musica, string $album, string $artista) {
        $this->musica = $musica;
        $this->album = $album;
        $this->artista = $artista;
        $this->disponivel = false;
    }
};

class Veiculo {
    private String $cor;
    private String $rodas;

    public function trocar_cor (string $color) {
        $this->cor = $color;
    }

    function __construct (string $cor, string $rodas) {
        $this->cor = $cor;
        $this->rodas = $rodas;
    }

    public function nome () {
        echo("Carro $this->cor com $this->rodas");
    }
}

// Classe carro criado a partir do veiculo
class Carro extends Veiculo {
    private String $marca;

    function __construct (string $cor, string $rodas, string $marca) {
        // Obrigado a chamar a funcao, visto que eh impossivel mexer na cor e rodas ja que eh PRIVATE
        parent::__construct($cor, $rodas);
        $this->marca = $marca;
    }

    public function trocar_marca (string $marca) {
        $this->marca = $marca;
        $this->trocar_cor('branco');
    }

    public function nome () {
        echo("carro da $this->marca");
    }
}

echo("\n");
$carro_novo = new Carro ('azul', '5', 'wolks');
$carro_novo->nome();
echo ("\n");

?>