<?php
    Class Pessoa{
        public $nome;
        public $altura;
        public $nascimento;
        public $hobbie;
        
        public function MostrarPessoas(){
        echo "Nome: ". $this->nome ."<br/>
            Altura: " . $this->altura ."<br/>
            Nascimento: ". $this->nascimento ."<br/>
            Hobbie: ". $this->hobbie ."<br/><br/><hr>";
        }
    }
?>