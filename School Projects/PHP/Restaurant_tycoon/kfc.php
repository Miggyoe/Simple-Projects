<?php 
    $restaurant = array();

    $m1 = array(
        "name" => "Kentucky Chicken",
        "price" => "80php"
    );
    $m2 = array(
        "name" => "Sprite",
        "price" => "59php"
    );
    $m3 = array(
        "name" => "French Fries",
        "price" => "60php"
    );

    array_push($restaurant, $m1);
    array_push($restaurant, $m2);
    array_push($restaurant, $m3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jollibee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    img {
        height: 100px;
        object-fit: cover; 
    }
    a {
        text-decoration: none;
        color: black;
    }
</style>
<body>
    <h1>RESTAURANT TYCOON</h1>
        <div class="container">
            <div class="row row-col-2">
                <div class="col-md-6">
                        <div class="card" style="width: 18rem; ">
                            <img src="https://cdn.manilastandard.net/wp-content/uploads/2023/10/jollibee-696x398.jpg" class="card-img-top" alt="Jollibee">
                            <div class="card-body">
                                <a href = "jollibee.php">
                                    <h5 class="card-title">Jollibee</h5>
                                </a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; ">
                            <img src="https://thumbs.dreamstime.com/b/mcdonalds-logo-icon-vector-logos-logo-icons-set-social-media-flat-banner-vectors-svg-eps-jpg-jpeg-emblem-wallpaper-background-208332606.jpg" class="card-img-top" alt="Mcdo">
                            <div class="card-body">
                                <a href = "mcdo.php">
                                    <h5 class="card-title">McDonald's</h5>
                                </a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; ">
                            <img src="https://thumbs.dreamstime.com/b/kfc-logo-vector-format-available-ai-illustrator-kfc-logo-125010855.jpg" class="card-img-top" alt="KFC">
                            <div class="card-body">
                                <a href = "kfc.php">
                                    <h5 class="card-title">KFC</h5>
                                </a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; ">
                            <img src="https://assets.turbologo.com/blog/en/2019/12/19084801/Wendys-logo.png" class="card-img-top" alt="Wendy's">
                            <div class="card-body">
                                <a href = "wendys.php">
                                    <h5 class="card-title">Wendy's</h5>
                                </a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; ">
                            <img src="https://wallpapers.com/images/hd/smudged-burger-king-logo-jk8596a2e7uv9b47.jpg" class="card-img-top" alt="Burger King">
                            <div class="card-body">
                                <a href = "burgerking.php">
                                    <h5 class="card-title">Burger King</h5>
                                </a>
                            </div>
                        </div>
                </div>

                <div class="col-md-6">
                    <?php foreach($restaurant as $r):?>
                        <div class="card" style="width: 18rem; "> 
                            <div class="card-body">          
                                    <h5 class="card-title"><?php echo $r['name']; ?></h5>
                                    <p class="card-text"><?php echo $r['price']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div> 
        </div>
</body>
</html>