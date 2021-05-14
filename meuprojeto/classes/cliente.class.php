<?php 
    class cliente{
        private $nome;
        private$idade;
        private $sexo;
        private $celular;
        private $email;
    
    public function setNome($nome){
        $this->nome=$nome;
    }
    public function setIdade($idade){
        $this->idade=$idade;
    }
    public function setSexo($sexo){
        $this->sexo=$sexo;
    }
    public function setCelular($celular){
        $this->celular=$celular;
    }
    public function setEmail($email){
        $this->email=$email;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function getEmail(){
        return $this->email;
    }
}
?>