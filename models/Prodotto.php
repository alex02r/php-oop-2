<?php
    class Prodotto{
        public $name;
        public $img;
        public $price;

        function __construct($_name, $_img, $_price){
            $this->name = $_name;
            $this->img = $_img;
            $this->price = $_price;
        }
        
    }
?>
