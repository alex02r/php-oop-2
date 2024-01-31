<?php
    include_once __DIR__."/Prodotto.php";

    class Cibo extends Prodotto{
        public $title;
        public $scadenza;
        function __construct($_name, $_img, $_price, Categoria $_categoria, $_title, $_scadenza){
            parent::__construct($_name, $_img, $_price, $_categoria );
            $this->title = $_title;
            $this->scadenza = $_scadenza;
        }
    };
    class Giochi extends Prodotto{
        public $title;
        function __construct($_name, $_img, $_price, Categoria $_categoria, $_title){
            parent::__construct($_name, $_img, $_price, $_categoria );
            $this->title = $_title;
        }
    };
    class Accessori extends Prodotto{
        public $title;
        function __construct($_name, $_img, $_price, Categoria $_categoria,$_title){
            parent::__construct($_name, $_img, $_price, $_categoria );
            $this->title = $_title;
        }
    };

?>