<?php

require __DIR__.'/models/Product.php';
require __DIR__.'/models/Food.php';
require __DIR__.'/models/Accessory.php';
require __DIR__.'/models/Game.php';

$foodProduct = new Food('Royal Canin Mini Adult', 43.99, 545, 'prosciutto, riso');
$foodProduct->animalType = 'Dog';
$foodProduct->imgUrl = 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boolshop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <h1>Boolshop</h1>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <img src="<?php echo $foodProduct->imgUrl ?>" alt="immagine prodotto">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>