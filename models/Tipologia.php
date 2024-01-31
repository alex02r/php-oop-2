<?php
    include_once __DIR__."/Prodotto.php";

    class Cibo extends Prodotto{
        public $tipologia;
        public $scadenza;
        function __construct($_name, $_img, $_price, Categoria $_categoria, $_tipologia, $_scadenza){
            parent::__construct($_name, $_img, $_price, $_categoria );
            $this->tipologia = $_tipologia;
            $this->scadenza = $_scadenza;
        }
    };
    class Giochi extends Prodotto{
        public $tipologia;
        function __construct($_name, $_img, $_price, Categoria $_categoria, $_tipologia){
            parent::__construct($_name, $_img, $_price, $_categoria );
            $this->tipologia = $_tipologia;
        }
    };
    class Accessori extends Prodotto{
        public $tipologia;
        function __construct($_name, $_img, $_price, Categoria $_categoria,$_tipologia){
            parent::__construct($_name, $_img, $_price, $_categoria );
            $this->tipologia = $_tipologia;
        }
    };

?>