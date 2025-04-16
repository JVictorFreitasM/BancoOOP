<?php

class ContaBanco {
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Métodos

    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC"){
            $this->setSaldo(50);
        }else if($t == "CP"){
            $this->setSaldo(150);
        }
    }

    public function fecharConta(){
        if ($this->getSaldo() > 0){
          echo  "<p>Conta com saldo positivo, não é possivel fechar conta.</p>";
        } else if ($this->getSaldo() < 0){
            echo "<p> Conta com saldo negativo, não é possivel fechar a conta.</p>";
        } else {
            $this->setStatus(false);
            echo "<p> Conta fechada com sucesso!</p>";
        }
    }

    public function depositar($v){
        if ($this->getStatus(true)){
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p> Foi depositado R$$v na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p> Não é possivel depositar em conta desativada</p>";
        }
    }

    public function sacar($v){
        if ($this->getSaldo() > 0 && $v < $this->getSaldo()){
            $this->setSaldo($this->getSaldo() - $v);
            echo"<p> Foi retirado R$$v da conta de " . $this->getDono() . "</p>";
        } else "<p>Você não tem saldo suficiente para sacar</p>";
    }

    public function pagarMensal($v){
        if ($this->getStatus() == "CC"){
            $v == 12;
        } else if ($this->getStatus() == "CP"){
            $v == 20;
        }

        if ($this->getStatus(true)){
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo "<p> Houve algum erro com a conta. </p>";
        }
    }

   

    //Métodos Especiais
    function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p> Conta criada com sucesso </p>";
    }

    function getnumConta(){
        return $this->numConta;
    }

    function setnumConta($n){
        $this->numConta = $n;
    }

    function getTipo(){
        return $this->tipo;
    }

    function setTipo($tp){
        $this->tipo = $tp;
    }

    function getDono(){
        return $this->dono;
    }

    function setDono($dn){
        $this->dono = $dn;
    }

    function getSaldo(){
        return $this->saldo;
    }

    function setSaldo($sld){
        $this->saldo = $sld;
    }

    function getStatus(){
        return $this->status;
    }

    function setStatus($stt){
        $this->status = $stt;
    }

    
    
}