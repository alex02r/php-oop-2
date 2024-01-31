<?php 
    include __DIR__."/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Pet Shop</title>
</head>
<body>
    <header class="bg-success p-3 text-white">
        <div class="d-flex align-items-center gap-3">
            <h1>Pet Shop</h1>
            <i class="fs-2 fas fa-paw"></i>
        </div>
    </header>
    <main>
        <div class="container my-5">
            <div class="row row-gap-3">
                <div class="col-12">
                    <h2> Prodotti Per animali: </h2>
                </div>
                <?php
                    foreach($products as $product){
                        ?>
                        <div class="col-4">
                            <div class="card p-3 h-100">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <img src="<?php echo $product->img ?>" class="img-fluid rounded-start" alt="<?php echo $product->name ?>">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $product->name ?></h5>
                                        <p class="card-text">
                                            <small class="text-body-secondary">Animale: <?php foreach($product->categoria as $type ){ echo $type; }; ?></small> <br>
                                            <small class="text-body-secondary">Tipologia: <?php echo $product->tipologia ?></small>
                                            <?php
                                                if (isset($product->scadenza)) {
                                                    ?> <br> <small class="text-body-secondary">Scadenza: <?php echo $product->scadenza ?></small><?php
                                                }
                                            ?>
                                        </p>
                                        <p class="card-text">Prezzo: <?php echo $product->price ?></p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>