let NbreDeChance = 0;

function afficher(val){ 
    let rep = document.getElementById("reponse").value;
    let rep1 = document.getElementById("calcul").value;
    let premiereChance= document.getElementById("premiereChance");
    let deuxiemeChance= document.getElementById("deuxiemeChance");
    let troisiemeChance= document.getElementById("troisiemeChance");

    if(NbreDeChance<=2){
        if( rep== " "){

            document.getElementById("reponse").value=val;

            setTimeout(
                function()
                {
                    let rep2 = eval(rep1)
                    if(rep2==val){
                        alert('felicitation');
                        window.location.href = "finCalculette.html";
                        NbreDeChance=3;
                        console.log(NbreDeChance);
                    }else{

                        alert("echec");
                        document.getElementById("reponse").value=" ";

                        NbreDeChance+=1;
                        if(NbreDeChance==3){
                            alert(rep2+" est la bonne reponse");
                            window.location.href = "finCalculette.html";

                        }
                        console.log(NbreDeChance);

                    }
                    
                },5000);

        }else{
            return false;
        }
    }else{
        document.getElementById("reponse").value=" ";
    }
    
    
}
function effacer(){
    document.getElementById("reponse").value= " ";
    clearTimeout();

    
}

