

<?php 

$json = 'data.json';

/******************************************************************************************************* */
/**CAS 1 SI UN AJOUT EST EFFECTUER */
if (isset($_POST["ajoutEnchere"])){
    
    $data_stock_post = array (
        $nomProduit = "nomProduit" => $_POST["nomProduit"],
        $prixInitial = "prixInitial" => $_POST["prixInitial"],
        $PrixClic = "PrixClic" => $_POST["PrixClic"],
        $upClic = "upClic" => $_POST["upClic"],
        $time = "time" => $_POST["time"],
        $upTime = "upTime" => $_POST["upTime"],
        $choixImage = "choixImage" => $_POST["choixImage"], 
        $identification = "identification" => [""], /**servira à recuperer une enchere particuliere */
    );
/**AJPUT D UN NOUVELE ELEMENT A JSON SANS ECRASER LA DONN2 EXISTANT */
/***ouvrir (decode) le fichier dans une var $tab*/
$data_stock_post_string = file_get_contents('data.json');
$data_stock_post_string = json_decode($data_stock_post_string, true);
/**mettre $data_stock_post dans la var $tab */
$data_stock_post_string =  $data_stock_post_string.json_encode($data_stock_post);;
/**enregistret cette modif dans data.json */
file_put_contents("data.json", json_encode ($data_stock_post_string));
};
/**UNE FOIS LES DONN2E ENREGISTRER IN VEUT QUE A CHAQUE SUBMIT ON GENERER L AFFICHAGE DE LA CAARD AVEC LES DONN2ES POST EN QUESTION Recuperer sur le json à son bon emplacemnt, ^revoir des id pour chaque element*/


foreach($array as $iden)
{
  $mykey = key($array);
}

?>





 
    
  
    

?>
<!------------------------------------------------------------------------------------------------------->

