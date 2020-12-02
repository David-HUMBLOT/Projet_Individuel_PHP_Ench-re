



<!--AVEC LA METHODE POST ET LE BUTTON SUBMIT ON  RECUPERE LES DONNER DANS CETTE PAGE DE TRAITEMENT-->

<?php 



$nomProduit = $_POST["nomProduit"];
$prixInitial = $_POST["prixInitial"];
$PrixClic = $_POST["PrixClic"];
$upClic = $_POST["upClic"];
$time = $_POST["time"];
$upTime = $_POST["upTime"];
$choixImage = $_POST["choixImage"];

/**Stockage sous forme de tableau et dans une seul variable les infos saisie depuis le formumaire apres un envoie valide*/
$data_stock_post = array ($nomProduit,$prixInitial,$PrixClic,$upClic,$time,$upTime,$choixImage);


/**pour la vérification sous forme de tableaux des éléments posté */
var_dump ("data_stock_post");
print_r ($data_stock_post);


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