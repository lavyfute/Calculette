
//fonction qui évalue le chiffre et renvoie la sortie
var sumNumbers = 0;

function calculer(){

    let a = document.getElementById("output").value;
    a= a.replace("=","");
    //var toto = a.split("+");
    //console.log(toto[0]);
    //console.log(toto[1]);

    let b = eval(a) 
    document.getElementById("output").value = b; 
    let res =document.getElementById("output").value;

    setTimeout(function(){window.location.href = "Calculette.php?var1=" + a + "&resultat=" + res;},5000);

} 
//fonction qui affiche la valeur
function afficher(val) 
{ 
    // affichage du premier et du charactere '+'  
    if((sumNumbers==0  && val!= "+") || (sumNumbers==1 && val=="+")){
        document.getElementById("output").value+=val ;
        sumNumbers+=1;
    }
    //affichage du chiffre apres le egal 
    if(sumNumbers==3 && val!="+"){
        let sum = document.getElementById("output").value+val;
        let a = sum.split("=")[1];
        if(eval(a)<11)
        {
            document.getElementById("output").value+=val; 
            
            setTimeout(function(){window.location.href = "finCalculette.html";},9000);
        }
    }
    // affichage du 2e chiffre apres le '+'( plus evaluationt)
    if(sumNumbers==2 && val!="+"){
        let sum = document.getElementById("output").value+val;

        if(eval(sum)<11)
        {
            document.getElementById("output").value+=val+" = ";   
            sumNumbers+=1;                         
        }
    }
}

//fonction qui efface l'écran 
function effacer() 
{ 
    sumNumbers=0;
    document.getElementById("output").value =" " 
} 
