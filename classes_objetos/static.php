<div class="titulo">Membros Estáticos</div>

<?php

/* Atributos estáticos pertencem apenas a classe, eles não podem ser
instanciados da mesma forma que os atributos comuns. Eles são usados como 
constantes de valor único que precisam ser declarados a cada nova instancia 
criada */

Class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA()
    {
        echo "Não estática = {$this->naoStatic}<br>";
        
        //Tentativa 1 - Atributo estático não pode ser acessado dessa forma
        //echo "Estática = {$this->static}<br>";

        //Tentativa 2 - tbm não funciona desta forma
        //echo "Estática = {self.$static}<br>";

        //Forma correta usando o self para acessar o atributo 
        echo "Estática = ". self::$static . "<br>";
    }

    /* dentro de uma função estatica só é possível acessar membros estáticos 
    o this não está disponível em uma função estática*/

    public static function mostrarStaticA()
    {
        //echo "Não estática = {$this->naoStatic}<br>";

        //desta forma tbm não é possível
        //echo "Estática = {$static}<br>";
        
        //Forma correta usando o self para acessar o atributo 
        echo "Estática = ". self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();

//forma não ideal
$objetoA->mostrarStaticA();

//forma ideal
echo A::$static, '<br>'; //acessar atributo diretamente pela classe
A::mostrarStaticA(); //acessar função estatica diretamente pela classe

A::$static = 'Alterando membro da classe';
echo A::$static, '<br>';