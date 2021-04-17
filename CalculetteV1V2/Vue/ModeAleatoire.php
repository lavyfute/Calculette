<?php 
require_once("../Model/Calcul.php");
$operantsAleatoire=somAleatoire();
$operant1=$operantsAleatoire[0];
$operant2=$operantsAleatoire[1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../ressources/js/scriptModeAleatoire.js"></script>
    <link rel="stylesheet" href="../ressources/css/style.css">
    
    <title>Document</title>
</head>

<body id="bodyModeM">
    
    <div id="container">
        <div id="header">
            <h1 id="entete">CALCULETTE</h1>
        </div>
        <div id="body">
            <div id="calculette">
                <div id="ecran">
                    <input name="" id="calcul" value="<?=$operant1?> + <?=$operant2?>" disabled> =
                    <input name="" id="reponse" value=" " disabled>
                </div>
                <div id="touches">

                    <div class="buttons" onclick="afficher('0')">0</div>
                    <div class="buttons" onclick="afficher('1')">1</div>
                    <div class="buttons" onclick="afficher('2')">2</div>
                    <div class="buttons" onclick="afficher('3')">3</div>
                    <div class="buttons" onclick="afficher('4')">4</div>
                    <div class="buttons" onclick="afficher('5')">5</div>
                    <div class="buttons" onclick="afficher('6')">6</div>
                    <div class="buttons" onclick="afficher('7')">7</div>
                    <div class="buttons" onclick="afficher('8')">8</div>
                    <div class="buttons" onclick="afficher('9')">9</div>
                    <div class="buttons" onclick="afficher('10')">10</div>
                    <div class="buttons" onclick="effacer()">C</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>