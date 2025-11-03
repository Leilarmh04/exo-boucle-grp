<!DOCTYPE html>
<html lang="fr">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
<body>
 
    <?php
    $menu = [
        "entree" => [
            "entree1" => [
                "nomDesPlats" => "salade",
                "prix" => 8
            ],
            "entree2" => [
                "nomDesPlats" => "bolognaise",
                "prix" => 6
            ],
            "entree3" => [
                "nomDesPlats" => "frites",
                "prix" => 20
            ],
 
        ],
        "plats" => [
            "plat1" => [
                "nomDesPlats" => "tajin",
                "prix" => 15
            ],
            "plat2" => [
                "nomDesPlats" => "pizza",
                "prix" => 19
            ],
            "plat3" => [
                "nomDesPlats" => "burger",
                "prix" => 10
            ]
        ],
 
        "desserts" => [
            "desserts1" => [
                "nomDesPlats" => "tarte aux fraises",
                "prix" => 9
            ],
            "desserts2" => [
                "nomDesPlats" => "glace",
                "prix" => 5
            ],
            "desserts3" => [
                "nomDesPlats" => "crepe",
                "prix" => 2
            ]
        ],
    ];
    $prenoms = ["ahmed", "leila", "goundo"];
    $total = 0;
    foreach ($prenoms as $pre) {
        echo "<h1>$pre</h1>";
        foreach ($menu as $ctegorie => $plats) {
            $cleAltr = array_rand($plats, 1);
            $plat = $plats[$cleAltr];
            echo "<h2> $ctegorie</h2>";
            foreach ($plat as $k2 => $v2) {
                if ($k2 == 'prix') {
                    echo "<li>$k2 : €$v2</li>";
 
                    $total+=$v2;
                } else {
                    echo "<li>$k2 : $v2</li>";
                }
 
            }
        }
        if ($total >= 20){
            $reduc = $total*.10;
            $pay = $total-$reduc;
            echo "votre reduction - $reduc"."<br>";
            echo "votre devez payer $pay";
           
        }
       
    }
 
 
 
 
    ?>
 
</body>
 
</html>
 