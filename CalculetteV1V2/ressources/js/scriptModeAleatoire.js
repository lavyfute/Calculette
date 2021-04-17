//fonction qui évalue le chiffre et renvoie la sortie

//fonction qui affiche la valeur
function afficher(val){ 
    let rep = document.getElementById("reponse").value;
    
    if( rep== " "){

        document.getElementById("reponse").value=val;

        setTimeout(function(){window.location.href='finCalculette.html';},5000);

    }else{
        return false;
    }
    
}
function effacer(){
    document.getElementById("reponse").value= " ";
    clearTimeout();

    
}