<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Snack_1</title>
     
 </head>
 <body>
 <!-- ## Snack 1

Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->
    <?php
        $matchs = [
            [
                'casa' => "Brindisi",
                'puntiCasa' => 99,
                'trasferta' => "Treviso",
                'puntiTrasferta' => 95
            ],
            [
                'casa' => "Brescia",
                'puntiCasa' => 86,
                'trasferta' => "Cremona",
                'puntiTrasferta' => 73
            ],
            [
                'casa' => "Sassari",
                'puntiCasa' => 104,
                'trasferta' => "Varese",
                'puntiTrasferta' => 99
            ],
            [
                'casa' => "Pesaro",
                'puntiCasa' => 69,
                'trasferta' => "Reggiana",
                'puntiTrasferta' => 72
            ],
            [
                'casa' => "Virtus Bologna",
                'puntiCasa' => 76,
                'trasferta' => "Fortitudo",
                'puntiTrasferta' => 70
            ],
        ];
        
    ?>

    <div>
        <?php
            for ($i=0; $i < count($matchs); $i++) { 
                echo $matchs[$i]['casa'] . " - " . $matchs[$i]['trasferta'] . " | " . $matchs[$i]['puntiCasa'] . " - " . $matchs[$i]['puntiTrasferta'] . "<br>";
            }
        ?>
    </div>
 </body>
 </html>