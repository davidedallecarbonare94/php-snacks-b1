<!-- 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->
<?php 
$results = [
    ["home_team" => "Milano",
    "away_team" => "Venezia",
    "result" => "66-80"
],
["home_team" => "Genova",
    "away_team" => "Padova",
    "result" => "95-99"
],
["home_team" => "Cantù",
    "away_team" => "Treviso",
    "result" => "112-89"
],
["home_team" => "Trasteverina",
    "away_team" => "Palermo",
    "result" => "85-91"
],
["home_team" => "Winners",
    "away_team" => "Losers",
    "result" => "75-90"
],
["home_team" => "Torino",
    "away_team" => "Roma",
    "result" => "95-100"
],
["home_team" => "Rovigo",
    "away_team" => "Nebbia",
    "result" => "110-110"
],
["home_team" => "Padova",
"away_team" => "Virtus Real",
"result" => "69-70"
],

];

/* 
Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

$name = $_GET["name"];
//strlen

$email = $_GET["email"];
$re = '/[A-z]+@[A-z]+.[A-z]+/m';
//

$age = $_GET["age"];
//is_numeric()








?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Snacks</title>
</head>

<body>
    <div>
        <h2>Snack 1</h2>
        <?php 
        for($i = 0; $i < count($results); $i++ ){ 
            $result = $results[$i]
            ?>
        <span> <?php echo $result["home_team"];?> <span> </span> <?php echo $result["away_team"]; ?> </span>
        <span> <?php echo $result["result"]; ?> </span>
        <p> </p>
        <?php } ?>
    </div>
    <div>
    <h2>Snack 2</h2>
    <?php 
    if((strlen($_GET["name"]) > 3) && is_numeric($_GET["age"]) && preg_match($re, $_GET["email"])){
        $response = "Accesso riuscito";
    } else {
        $response = "Accesso negato";
    }
    
    ?>
    <p><?php echo $response ?> </p>
    
    
    
    
    </div>





</body>

</html>