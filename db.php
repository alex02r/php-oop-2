<?php
    include_once __DIR__."/models/TypeProduct.php";
    $animal_1 = "Cane";
    $animal_2 = "Gatto";
    $animal_3 = "Uccelli";
    $animal_4 = "Pesci";

    $products = [];

    $img_1 = "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000"; 
    $products[] = $product_1 = new TypeProduct("Royal Canin Mini Adult", $img_1, 5.99, "cibo", $animal_1);

    $img_2 = "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg";
    $products[] = $product_2 = new TypeProduct("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", $img_2, 7.99, "cibo", $animal_1);

    $img_3 = "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg";
    $products[] = $product_3 = new TypeProduct("Almo Nature Cat Daily Lattina", $img_3, 4.99, "cibo", $animal_2);

    $img_4 = "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg";
    $products[] = $product_4 = new TypeProduct("Mangime per Pesci Guppy in Fiocchi", $img_4, 6.99, "cibo", $animal_4);

    $img_5 = "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg";
    $products[] = $product_5 = new TypeProduct("Voliera Wilma in Legno", $img_5, 43.99, "accessori", $animal_3);

    $img_6 = "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg";
    $products[] = $product_6 = new TypeProduct("Cartucce Filtranti per Filtro EasyCrystal", $img_6, 12.99, "accessori", $animal_4);

    $img_7 = "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg";
    $products[] = $product_7 = new TypeProduct("Kong Classic", $img_7, 2.99, "giochi", $animal_1);

    $img_8 = "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg";
    $products[] = $product_8 = new TypeProduct("Topini di peluche Trixie", $img_8, 1.99, "giochi", $animal_2);

?>