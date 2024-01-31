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
    $products[] = $product_3 = new TypeProduct("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", $img_3, 4.99, "cibo", $animal_2);
?>