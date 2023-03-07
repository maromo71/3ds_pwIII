<?php
    class Professor{
        public $registro;
        public $nome;

        public function aplicar_prova($qtd_questoes){
            return "Prova aplicada por $this->nome \n" . 
                "Possui $qtd_questoes questoes objetivas";
        }
    }