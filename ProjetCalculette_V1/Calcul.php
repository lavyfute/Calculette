<?php

	function somManuel($operant1,$operant2,$resultat) {
		$somM=$operant1+$operant2;
		return $resultat;
	}
	
	function somAleatoire() {
		$somA=0;
		$operant1=rand(0,10);
		$operant2=rand(0, (10-$operant1));
		$somA=$operant1+$operant2;
		
		$res = [$operant1,$operant2];
		return $res;
	}


?>