<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Category.php';

$vintageElectronicsCat = new Category('Vintage Electronics', 'Dispositivi elettronici vintage', 'https://cdnmetv.metv.com/XgGp6-1652303066-1697-lists-untitled_design_%283%29.jpg');

$wearables = new Category('Wearables', 'Dispositivi indossabili inutili', 'https://i0.wp.com/circuitcellar.com/wp-content/uploads/2022/12/385-Al-SF-Lead.jpg?fit=1258%2C921&ssl=1');

$tvProduct = new Product('Vintage TV','Televisore a tubo catodico finissimo, appena 55cm', 33.99, $vintageElectronicsCat);
$watchProduct = new Product('Inutilwatch', 'Il nuovo smartwatch che chiede tutto al proprietario', 77.33, $wearables);

$products = [ $tvProduct, $watchProduct, $tvProduct, $watchProduct, $tvProduct, $watchProduct, $tvProduct, $watchProduct ];

var_dump($tvProduct, $watchProduct, Product::$sellable);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>OOP 1</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <header class="container">
        <div class="row text-center mb-3 p-3">
            <div class="col-12">
                <h1>
                    PHP Object Oriented Programming
                </h1>
            </div>
        </div>
    </header>
    <main class="container">
        <section class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-3">
                    <div class="card">
                        <img src="<?php echo $product->category->imageUrl; ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product->description; ?>
                            </h5>
                            <h6 class="card-subtitle">
                                <?php echo $product->category->name; ?>
                            </h6>
                            <p class="card-text">
                                <?php echo $product->description; ?>
                            </p>
                            <a href="#" class="btn btn-primary">
                                Acquista per soli <?php echo $product->getPrice(); ?>&euro;
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
    </main>
</body>
</html>

