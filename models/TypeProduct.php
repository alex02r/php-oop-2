<?php
    include_once __DIR__."/Prodotto.php";

    class TypeProduct extends Prodotto{
        public $type;
        public $animal;
        function __construct($_name, $_img, $_price, $_type, $_animal){
            parent::__construct($_name, $_img, $_price );
            $this->type = $_type;
            $this->animal = $_animal;
        }
    }
?>