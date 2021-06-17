<div class="titulo">Visibilidade</div>

<?php

Class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    /* Função publica que pertence a própria classe tem acesso a todos atributos */
    public function mostrarA()
    {
        echo "Classe A) Público = {$this->publico}<br>";
        echo "Classe A) Protegido = {$this->protegido}<br>";
        echo "Classe A) Privado = {$this->privado}<br>";
    }

    /* Função privada só pode ser acessada dentro da própria classe */
    private function naoMostrar()
    {
        echo "Não vou imprimir!";
    }

    /* Função protected só podera ser acessada em classes herdeiras */
    protected function vaiPorHerança()
    {
        echo "Serei transmitido por herança!";
    }
}

/* A partir de um objeto podemos acessar todos os atributos da classe
através de sua função pública, mas não podemos acessar a função privada*/
$a = new A();
//$a->publico = "Fui Modificado";
//$a->naoMostrar();
$a->mostrarA();

/* Criando uma subclasse que herdeira da classe A */
Class B extends A {
    public function mostrarB() 
    {
        echo "Classe B) Público = {$this->publico}<br>";
        echo "Classe B) Protegido = {$this->protegido}<br>";
        echo "Classe B) Privado = {$this->privado}<br>";

        parent::vaiPorHerança();
    }
}

/* - Atributos publicos ficam disponiveis para todo mundo e também 
são transmitidos por herança por toda a hierarquia de classes.
- Atributos protegidos são transmitidos apenas por herança por toda a hierarquia de classes.
- Atributos privados ficam disponiveis apenas nas classes em que foram declarados */
echo '<br>';
$b = new B();
$b->mostrarB();
//funçao protected não estará disponível qdo instanciar um objeto
//$b->vaiPorHerança();
