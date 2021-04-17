
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../ressources/js/scriptModeMabuel.js"></script>
    <link rel="stylesheet" href="../ressources/css/style.css">
    <title>Document</title>
</head>

<body id="bodyModeM">
    <div id="container">
        <div id="header">
            <h1>CALCULETTE</h1>
        </div>
        <div id="body">
            <div id="calculette">
                <div id="ecran">
                    <input name="" id="output" value=" " >
                </div>
                <div id="touches">

                    <div class="buttons" onclick="afficher('0')" value="0">0</div>
                    <div class="buttons" onclick="afficher('1')" value="1">1</div>
                    <div class="buttons" onclick="afficher('2')" value="2">2</div>
                    <div class="buttons" onclick="afficher('3')" value="3">3</div>
                    <div class="buttons" onclick="afficher('4')" value="4">4</div>
                    <div class="buttons" onclick="afficher('5')" value="5">5</div>
                    <div class="buttons" onclick="afficher('6')" value="6">6</div>
                    <div class="buttons" onclick="afficher('7')" value="7">7</div>
                    <div class="buttons" onclick="afficher('8')" value="8">8</div>
                    <div class="buttons" onclick="afficher('9')" value="9">9</div>
                    <div class="buttons" onclick="afficher('+')">+</div>

                    <div class="buttons" onclick="effacer()">C</div>

                </div>
            </div>
        </div>
    </div>


</body>
</html>