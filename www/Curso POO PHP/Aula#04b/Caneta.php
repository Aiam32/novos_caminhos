<?php
class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    

    function __construct($modelo, $cor, $ponta)
    {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->setTampada = true;
    }


    
    


    //public function __construct($m, $c, $p) { // Metódo construtor
        //$this->cor = "Azul";
        //$this->tampar(); 
        //$this->modelo = $m;
        //$this->cor = $c;
        //$this->ponta = $p;
        //$this->tampar();
    


    //public function tampar() {
        //$this->tampada = true;
    //}
    
    //public function getModelo() {
        //return $this->modelo; 
    //}
    
    //public function setModelo($m) {
        //$this->modelo = $m; 
    //}

    //public function getPonta() {
        //return $this->ponta; 
    //}

    //public function setPonta($p) {
        //$this->ponta = $p;
    //}
}

?>