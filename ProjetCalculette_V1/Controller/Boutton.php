<?php

?>

<?php

class Calcul {
	private $operant1;
	private $operant2;
	private $resultat;

    function __construct($_operant1, $_operant2, $resultatProposer) {
		$this->operant1 = $_operant1;
		$this->operant2 = $_operant2;
		$this->resultat = $resultatProposer;
	}

	function somManuel() {
		$somM=0;
		$somM=$operant1+$operant2;
		return $resultat;
	}
	public function somAuto() {
		$somA=0;
		$operant1=rand(0,11);
		$operant2=rand(0, (11-$operant1));
		$somA=$operant1+$operant2;
		
		$res = [$operant1,$operant2];
		return $res;
	}
	
	public function getOperant1() {
		return $operant1;
	}
	public function setOperant1($_operant1) {
		$this->operant1 = $_operant1;
	}
	public function getOperant2() {
		return $operant2;
	}
	public function setOperant2(_$operant2) {
		$this->operant1 = $_operant2;
	}
	public function getResultat() {
		return $resultat;
	}
	public function setResultat($resultatProposer) {
		$this->resultat = $resultatProposer;
	}
	
	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body id="bodyModeM">
    <div id="container">
        <div id="header">
            <h1>CALCULETTE</h1>
        </div>
        <div id="body">
            <input name="" id="number" value="" disabled>
            <div id="calculette">
                <div class="buttons" onclick="afficher('1')">1</div>
                <div class="buttons" onclick="afficher('2')">2</div>
                <div class="buttons" onclick="afficher('3')">3</div>
                <div class="buttons" onclick="afficher('4')">4</div>
                <div class="buttons" onclick="afficher('5')">5</div>
                <div class="buttons" onclick="afficher('6')">6</div>
                <div class="buttons" onclick="afficher('7')">7</div>
                <div class="buttons" onclick="afficher('8')">8</div>
                <div class="buttons" onclick="afficher('9')">9</div>
                <div class="buttons" onclick="afficher('0')">0</div>
                <div class="buttons" onclick="afficher('+')">+</div>
                <div class="buttons" onclick="calculer()">=</div>

            </div>
            <script> 
                //fonction qui évalue le chiffre et renvoie la sortie
                function calculer() 
                { 
                        let a = document.getElementById("number").value 
                        let b = eval(a) 
                        document.getElementById("number").value = b 
                    } 
                    //fonction qui affiche la valeur
                    function afficher(val) 
                    { 
                        document.getElementById("number").value=val 
                    } 
                    //fonction qui efface l'écran 
                    function effacer() 
                    { 
                        document.getElementById("number").value = "" 
                } 
            </script>
        </div>
    </div>
        </div>
    <form action="Calculette.php" method="post">
        <input type="number" name="operant1" min="0" max="10" placeholder="rentre un nombre" required >
        <input type="number" name="operant2" min="0" max="10" placeholder="rentre un nombre" required>
        <input type="number" name="resultat" placeholder="rentre le resultat" required>

        <input type="submit" value="Valider">
    </form>
</body>
</html>
