<?php

require __DIR__.'/models/Product.php';
require __DIR__.'/models/Food.php';
require __DIR__.'/models/Accessory.php';
require __DIR__.'/models/Game.php';

// cibo

$foodProduct = new Food('Royal Canin Mini Adult', 43.99, 545, 'prosciutto, riso');
$foodProduct->animalType = 'Dog';
$foodProduct->imgUrl = 'https://arcaplanet.vtexassets.com/arquivos/ids/243820/royal-canin-size-cane-mini-adult.jpg';

$foodProduct02 = new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, 600, 'manzo, cereali');
$foodProduct02->animalType = 'Dog';
$foodProduct02->imgUrl = 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg';

$foodProduct03 = new Food('Almo Nature Cat Daily Lattina', 34.99, 400, 'tonno, pollo, prosciutto');
$foodProduct03->animalType = 'Cat';
$foodProduct03->imgUrl = 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg';

$foodProduct04 = new Food('Mangime per Pesci Guppy in Fiocchi', 2.95, 30, 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');
$foodProduct04->animalType = 'Fish';
$foodProduct04->imgUrl = 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg';

$foodProducts = [$foodProduct, $foodProduct02, $foodProduct03, $foodProduct04];

// accessori

$accessoryProduct = new Accessory('Voliera Wilma in Legno', 184.99, 'Legno', 'M: L 83 x P 67 x H 153');
$accessoryProduct->animalType = 'Bird';
$accessoryProduct->imgUrl = 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg';

$accessoryProduct02 = new Accessory('Cartucce Filtranti per Filtro EasyCrystal', 2.29, 'Materiale espanso', 'ND');
$accessoryProduct02->animalType = 'Fish';
$accessoryProduct02->imgUrl = 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg';

$accessoryProducts = [$accessoryProduct, $accessoryProduct02];

// giochi

$gameProduct = new Game('Kong Classic', 13.49, 'Galleggia e rimbalza', '8,5 cm x 10cm');
$gameProduct->animalType = 'Dog';
$gameProduct->imgUrl = 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg';

$gameProduct02 = new Game('Topini di peluche Trixie', 4.99, 'Morbido con docina in corda', '8,5 cm x 10 cm');
$gameProduct02->animalType = 'Cat';
$gameProduct02->imgUrl = 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg';

$gameProducts = [$gameProduct, $gameProduct02];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boolshop</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <h1 class="text-center py-5 bg-primary-subtle">Boolshop</h1>
        </header>
        <main>
            <div class="container my-5">
                <div class="row">
                    <!-- cibo -->
                    <?php foreach($foodProducts as $foodProduct) { ?>
                        <div class="col-4 my-3">
                            <div class="card p-2 h-100 bg-warning-subtle">
                                <!-- immagine -->
                                <img src="<?php echo $foodProduct->imgUrl ?>" alt="immagine prodotto">
                                <div class="card-body">
                                    <!-- nome prodotto -->
                                    <h5 class="card-title"><?php echo $foodProduct->name ?></h5>
                                    <!-- icona -->
                                    <?php if ($foodProduct->animalType == 'Dog'): ?>
                                        <p><i class="fas fa-dog"></i> Cane</p>
                                    <?php elseif ($foodProduct->animalType == 'Cat'): ?>
                                        <p><i class="fas fa-cat"></i> Gatto</p>
                                    <?php elseif ($foodProduct->animalType == 'Fish'): ?>
                                        <p><i class="fas fa-fish"></i> Pesce</p>
                                    <?php elseif ($foodProduct->animalType == 'Bird'): ?>
                                        <p><i class="fas fa-dove"></i> Uccello</p>
                                    <?php endif; ?>
                                    <!-- prezzo -->
                                    <p>Prezzo: 	&euro;<?php echo $foodProduct->price ?></p>
                                    <p>Peso netto: <?php echo $foodProduct->weigth ?>g</p>
                                    <p>Ingredineti: <?php echo $foodProduct->ingredients ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- accessori -->
                    <?php foreach($accessoryProducts as $accessoryProduct) { ?>
                        <div class="col-4 my-3">
                            <div class="card p-2 h-100 bg-warning-subtle">
                                <!-- immagine -->
                                <img src="<?php echo $accessoryProduct->imgUrl ?>" alt="immagine prodotto">
                                <div class="card-body">
                                    <!-- nome prodotto -->
                                    <h5 class="card-title"><?php echo $accessoryProduct->name ?></h5>
                                    <!-- icona -->
                                    <?php if ($accessoryProduct->animalType == 'Dog'): ?>
                                        <p><i class="fas fa-dog"></i> Cane</p>
                                    <?php elseif ($accessoryProduct->animalType == 'Cat'): ?>
                                        <p><i class="fas fa-cat"></i> Gatto</p>
                                    <?php elseif ($accessoryProduct->animalType == 'Fish'): ?>
                                        <p><i class="fas fa-fish"></i> Pesce</p>
                                    <?php elseif ($accessoryProduct->animalType == 'Bird'): ?>
                                        <p><i class="fas fa-dove"></i> Uccello</p>
                                    <?php endif; ?>
                                    <!-- prezzo -->
                                    <p>Prezzo: 	&euro;<?php echo $accessoryProduct->price ?></p>
                                    <p>Materiale: <?php echo $accessoryProduct->material ?>g</p>
                                    <p>Dimensioni: <?php echo $accessoryProduct->dimension ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- giochi -->
                    <?php foreach($gameProducts as $gameProduct) { ?>
                        <div class="col-4 my-3">
                            <div class="card p-2 h-100 bg-warning-subtle">
                                <!-- immagine -->
                                <img src="<?php echo $gameProduct->imgUrl ?>" alt="immagine prodotto">
                                <div class="card-body">
                                    <!-- nome prodotto -->
                                    <h5 class="card-title"><?php echo $gameProduct->name ?></h5>
                                    <!-- icona -->
                                    <?php if ($gameProduct->animalType == 'Dog'): ?>
                                        <p><i class="fas fa-dog"></i> Cane</p>
                                    <?php elseif ($gameProduct->animalType == 'Cat'): ?>
                                        <p><i class="fas fa-cat"></i> Gatto</p>
                                    <?php elseif ($gameProduct->animalType == 'Fish'): ?>
                                        <p><i class="fas fa-fish"></i> Pesce</p>
                                    <?php elseif ($gameProduct->animalType == 'Bird'): ?>
                                        <p><i class="fas fa-dove"></i> Uccello</p>
                                    <?php endif; ?>
                                    <!-- prezzo -->
                                    <p>Prezzo: 	&euro;<?php echo $gameProduct->price ?></p>
                                    <p>Caratteristiche: <?php echo $gameProduct->feature ?>g</p>
                                    <p>Dimensioni: <?php echo $gameProduct->dimension ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>
    </body>
</html>