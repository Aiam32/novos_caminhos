<?php
class Caneta {
    public $modelo;
    public $cor;
    public $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar() {
        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso rasbicar</p>";
        }
        else {
            echo "<p>Estou rabiscando...</p>"; 
        }
        
    }
    public function tampar() {
        $this->tampada = true;
    }
    public function destampar() {
        $this->tampada = false;
    }

}

?>