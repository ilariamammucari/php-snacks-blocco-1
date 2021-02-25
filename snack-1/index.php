<?php
// ! Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// ! Stampiamo a schermo tutte le partite con questo schema:
// ! Olimpia Milano - Cantù | 55 - 60

$matches = [
    [
        'squadraCasa' => 'Los Angeles Lakers',
        'squadraOspite' => 'Miami Heat',
        'puntiCasa' => '60',
        'puntiOspite' => '45'
    ],
    [
        'squadraCasa' => 'Orlando Magic',
        'squadraOspite' => 'Toronto Raptors',
        'puntiCasa' => '89',
        'puntiOspite' => '78'
    ],
    [
        'squadraCasa' => 'Indiana Pacers',
        'squadraOspite' => 'denver Nuggets',
        'puntiCasa' => '92',
        'puntiOspite' => '105'
    ],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>
<body>
    
    <?php 
        for ( $i = 0; $i < count($matches); $i++ ) {
            $casa = $matches[$i]['squadraCasa'];
            $ospite = $matches[$i]['squadraOspite'];
            $puntiCasa = $matches[$i]['puntiCasa'];
            $puntiOspite = $matches[$i]['puntiOspite'];
    ?>
    <div> <?php echo $casa . ' - ' . $ospite . ' | ' . $puntiCasa . ' - ' . $puntiOspite ?></div>
    <?php } ?>


</body>
</html>