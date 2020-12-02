

<?php 

/**apel au fonction ajoutenchere pour concatener un ajout à json */




/**AVEC LA METHODE POST ET LE BUTTON SUBMIT ON  RECUPERE LES DONNER DANS CETTE PAGE DE TRAITEMENT OK*/

if (isset($_POST["ajoutEnchere"])){


    $nomProduit = $_POST["nomProduit"];

    $prixInitial = $_POST["prixInitial"];
    $PrixClic = $_POST["PrixClic"];
    $upClic = $_POST["upClic"];
    $time = $_POST["time"];
    $upTime = $_POST["upTime"];
    $choixImage = $_POST["choixImage"]; 


    $data_stock_post = array (
        $nomProduit => $nomProduit,
        $prixInitial => $prixInitial,
        $PrixClic => $PrixClic,
        $upClic => $upClic,
        $time => $time,
        $upTime => $upTime,
        $choixImage => $choixImage,)


/**Stockage sous forme de tableau et dans une seul variable les infos saisie depuis le formumaire apres un envoie valide 
$data_stock_post = array ($nomProduit,$prixInitial,$PrixClic,$upClic,$time,$upTime,$choixImage); 
sous cette forme ilmanque les clés du coup pose probleme pour la suite et donc on rajoute les clé necessaire avant la varible que 
on stock grace a =>

 
    );*/



   /**Convertion de data_stock_post au format JSON avec json_encode()*/
   /**attribution de l'adresse de la page data.json à la variable $json afin de prévenir la réecriture de code */
   /**var_dump ($json); */
  
$json = "../../Json_data_stock_post/data.json";
/**fil_put_conyent() sert à inserer du contenu (parametre 2) à une destination (paramètre 1) */

//**si json existe   unshift comme push mais ordre en premier */


if(isset($json)){
    $recupJson = file_get_contents($json); //true pour dessigner que ce soit un tableaux associatif
    $convertJson = json_decode($recupJson, true);
};
  
    

if ($convertJson){
    array_unshit($convertJson,$data_stock_post);
    file_put_contents($json,json_encode($convertJson));
                }

else {
    $json = [];
    array_unshift($convertJson,$data_stock_post);
    file_put_contents($json,json_encode($convertJson));
};
};
?>