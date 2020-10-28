<?php
class contaBanco {
    
    // Atributos
    public $numConta;
            //inteiro(int)
    protected $tipo;
            //caractere
    private $dono;
            //caractere
    private $saldo;
            //real(float)
    private $status;
            //logico(boolean)
            
    // Métodos
    //public function abrirConta() {
        //$this->numConta = true;
    //}        
    //public function fecharConta() {
        //$this->numConta = false;
    //}
    
    //public function depositar() {
        //$this->tipo = true;
    //}
    //public function sacar() {
        //$this->tipo = false;
    //}
    
    //public function pagarMensal() {
        
    //}
    
    
    // Métodos Especiais
    
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso</p>";
    } 
/////////////////////////////////////////
    
    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }
    public function getNumConta() {
        return $this->numConta; 
    }
    
    
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    public function getTipo() {
        return $this->tipo; 
    }


    public function setDono($dono) {
        $this->dono = $dono;
    }
    public function getDono() {
        return $this->dono; 
    }


    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function getSaldo() {
        return $this->saldo; 
    }

    
    public function setStatus($status) {
        $this->saldo = $status;
    }
    public function getStatus() {
        return $this->status; 
    }
//////////////////////////////////////////

    // Métodos

    public function abrirConta($tipo) {
            $this->setTipo($tipo);
            $this->setStatus(true);
    
        if ($tipo == "CC") {
            $this->setSaldo(50);
            //$this->saldo = 50;
        }   
        elseif ($tipo == "CP") { 
                $this->setSaldo(150); 
                //$this->saldo = 150;  
        }
    }
    
    
    public function fecharConta() {
        
        if ($this->getSaldo() > 0) {
           //($this->saldo > 0);
            echo "<p>Conta ainda tem dinheiro, não posso fecha-lá</p>";
        }
        elseif ($this->getSaldo() < 0) {
                //($this->saldo < 0);
            echo "<p>Conta está em débito, impossível encerrar</p>";
        }
        else {
            $this->setStatus(false);
                echo "<p>Conta de " .$this->getDono() ." está fechada com sucesso </p>";
        }
    }

    public function depositar($v) {
        
        if ($this->getStatus() == false) { 
            //($this->status == true) 
            
            $this->setSaldo($this->getSaldo() + $v);       
            //$this->saldo = $this->saldo + $v;
        }
        else {   
            echo "<p>Conta fechada, não consigo depositar</p>";
        }
    }
    
    
    public function sacar($v) {
        
        if ($this->getStatus() == false) { 
         //($this->status = true); 
            
            if ($this->getSaldo() >= $v) { 
                
                //$this->saldo = $this->saldo - $v;
                $this->setSaldo($this->getSaldo() - $v); 
                    echo "<p>Saque de $v autorizado na conta de ".$this->getDono()."</p>";
            }        
                else {
                    echo "<p>Saldo insuficiente para saque.</p>";
            }           
        }
            
        else {
                echo "<p>Não posso sacar de uma conta fechada.</p>";
            }    
        }
    
    public function pagarMensal() {

        
        if ($this->getTipo() == "CC") {
            //($this->tipo = "CC"); 
                $v = 12;
        }
            else if ($this->getTipo() == "CP") { 
                $v = 20;
                    
            }
            if ($this->getStatus() == false) { 
                $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Mensalidade de R$ $v debitada na conta de " .$this->getDono() ."</p>";
            }
                else {
                    echo "<p>Problemas com conta Não posso cobrar.</p>";
        }

}    


}    

?>