
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $products=[
        [
            "id"=>1,
            "name"=>"apple",
            "price"=>500
        ],
        [
            "id"=>2,
            "name"=>"banane",
            "price"=>300
        ],
        [
            "id"=>3,
            "name"=>"mango",
            "price"=>400
        ],
        [
            "id"=>4,
            "name"=>"lemon",
            "price"=>200
        ],
    ]
    ?>
    <?php foreach($products as $product):?>
        <div>
            <h1>
                <?= $product["name"] ?>
            </h1>
            <p>
                <?= $product["price"] ?>
            </p>
        </div>
        <hr>
    <?php endforeach;?>
</body>
</html>