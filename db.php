<?php
    include_once __DIR__."/models/Tipologia.php";
    include_once __DIR__."/models/Prodotto.php";
    $animal_1 = new Categoria("Cane");
    $animal_2 = new Categoria("Gatto");
    $animal_3 = new Categoria("Uccelli");
    $animal_4 = new Categoria("Pesci");

    $products = [];

    $img_1 = "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000";
    $products[] = $product_1 = new Cibo("Royal Canin Mini Adult", $img_1, 5.99, $animal_1, "cibo", "22/03/2024");

    $img_2 = "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg";
    $products[] = $product_2 = new Cibo("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", $img_2, 7.99, $animal_1, "cibo", "22/03/2024");

    $img_3 = "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg";
    $products[] = $product_3 = new Cibo("Almo Nature Cat Daily Lattina", $img_3, 4.99, $animal_2, "cibo", "22/03/2024");

    $img_4 = "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg";
    $products[] = $product_4 = new Cibo("Mangime per Pesci Guppy in Fiocchi", $img_4, 6.99, $animal_4, "cibo", "23/05/2024" );

    $img_5 = "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg";
    $products[] = $product_5 = new Accessori("Voliera Wilma in Legno", $img_5, 43.99, $animal_3, "accessori");

    $img_6 = "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg";
    $products[] = $product_6 = new Accessori("Cartucce Filtranti per Filtro EasyCrystal", $img_6, 12.99, $animal_4, "accessori");

    $img_7 = "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg";
    $products[] = $product_7 = new Giochi("Kong Classic", $img_7, 2.99, $animal_1, "giochi");

    $img_8 = "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg";
    $products[] = $product_8 = new Giochi("Topini di peluche Trixie", $img_8, 1.99, $animal_2, "giochi");

?>