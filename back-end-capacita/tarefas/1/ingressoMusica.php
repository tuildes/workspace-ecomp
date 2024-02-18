<?php

echo("\n");
include 'ingressos.php';

class IngressoMusica extends ingresso {
    private String $nomeArtista;
    private bool $vip;

    public function imprimirIngresso() {
        $this->lerIngresso();
        echo("Artista: $this->nomeArtista\n");
    }

    function __construct (string $nomeArtista, string $nomeEvento, string $local, int $preco) {
        parent::__construct($nomeEvento, $local, $preco);
        $this->nomeArtista = $nomeArtista;
        $this->vip = false;
    }
}

$v1 = new IngressoMusica ('Rodrigo Zin', 'Show de RAP', 'Cwb', 50);
$v1->imprimirIngresso();

?>