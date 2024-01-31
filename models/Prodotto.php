<?php
    class Prodotto{
        public $name;
        public $img;
        public $price;
        public $categoria;

        function __construct($_name, $_img, $_price, Categoria $_categoria){
            $this->name = $_name;
            $this->img = $_img;
            $this->price = $_price;
            $this->categoria = $_categoria;
        }

    };
    class Categoria{
        public $categoria;

        function __construct($_categoria){
            $this->categoria = $_categoria;
        }
    }
?>
