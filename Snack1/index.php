<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica 
tappa del calendario. Ogni array avrà una squadra di casa e una squadra 
ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
    $games = [
        [
            'homeTeam' => 'Olimpia Milano',
            'awayTeam' => 'Cantù',
            'pointsH'  => '55',
            'pointsA'   => '60'
        ],
        [
            'homeTeam' => 'Cracovia',
            'awayTeam' => 'Sparta',
            'pointsH'  => '88',
            'pointsA'   => '89'
        ],
        [
            'homeTeam' => 'Alexandria',
            'awayTeam' => 'San Martino',
            'pointsH'  => '80',
            'pointsA'   => '69'
        ],
    ];
   /*  var_dump($games); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <ul>
        <?php for($i = 0; $i < count($games);$i++) {?>
        <li>
            <p>
                <?php echo $games[$i]['homeTeam']. ' - ' .$games[$i]['awayTeam']. ' | ' . $games[$i]['pointsH'] . ' - ' . $games[$i]['pointsA']?>
            </p>
        </li>
        <?php } ?>
    </ul>
</body>
</html>