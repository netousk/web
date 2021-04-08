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

    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
}
?>