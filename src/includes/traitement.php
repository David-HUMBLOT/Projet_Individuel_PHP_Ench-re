<?php 

/**AVEC LA METHODE POST ET LE BUTTON SUBMIT ON  RECUPERE LES DONNER DANS CETTE PAGE DE TRAITEMENT OK*/

if (isset($_POST["ajoutEnchere"])){
    $nomProduit = $_POST["nomProduit"];
    $prixInitial = $_POST["prixInitial"];
    $PrixClic = $_POST["PrixClic"];
    $upClic = $_POST["upClic"];
    $time = $_POST["time"];
    $upTime = $_POST["upTime"];
    $choixImage = $_POST["choixImage"]; 

/**Stockage sous forme de tableau et dans une seul variable les infos saisie depuis le formumaire apres un envoie valide 
$data_stock_post = array ($nomProduit,$prixInitial,$PrixClic,$upClic,$time,$upTime,$choixImage); 
sous cette forme ilmanque les clés du coup pose probleme pour la suite et donc on rajoute les clé necessaire avant la varible que 
on stock grace a =>*/

  $data_stock_post = array (
        "nomProduit" => $nomProduit,
        "prixInitial" => $prixInitial,
        "PrixClic" => $PrixClic,
        "upClic" => $upClic,
        "time" => $time,
        "upTime" => $upTime,
        "choixImage" => $choixImage
    );

   /**Convertion de data_stock_post au format JSON avec json_encode()*/
   /**attribution de l'adresse de la page data.json à la variable $json afin de prévenir la réecriture de code */
   /**var_dump ($json); */
  
$json = "../../Json_data_stock_post/data.json";
/**fil_put_conyent() sert à inserer du contenu (parametre 2) à une destination (paramètre 1) */
file_put_contents ($json,json_encode ($data_stock_post));
};


















?>







<!-- Pour la vérification de récupération des input :

echo $nomProduit;
echo $prixInitial;
echo $PrixClic;
echo $upClic;
echo $time;
echo $upTime;
echo $choixImage;

-->