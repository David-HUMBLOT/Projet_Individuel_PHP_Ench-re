

<?php 
$json = 'data.json';
/**AJOUT EST EFFECTUER */
if (isset($_POST["ajoutEnchere"]))
{  $data_stock_post =  array(
'nomProduit' => $_POST['nomProduit'],
'prixInitial' => $_POST['prixInitial'],
'PrixClic' => $_POST['PrixClic'],
'upClic' => $_POST['upClic'],
'time' => $_POST['time'],
'upTime' => $_POST['upTime'],
'choixImage' => $_POST['choixImage'],  );
 /**servira à recuperer une enchere particuliere _ AJoUT D UN NOUVELE ELEMENT A JSON SANS ECRASER LA DONN2 EXISTANT _ ouvrir (decode) le fichier dans une var $tab*/
$data_stock_post_string = file_get_contents('data.json');
$data_stock_post_array = json_decode($data_stock_post_string, true);
/**mettre $data_stock_post dans la var $tab __ $data_stock_post_array =  $data_stock_post_string.json_encode($data_stock_post); _ enregistret cette modif dans data.json 
UNE FOIS LES DONN2E ENREGISTRER IN VEUT QUE A CHAQUE SUBMIT ON GENERER L AFFICHAGE DE LA CARD AVEC LES DONN2ES POST EN QUESTION Recuperer sur le json à son bon emplacemnt, ^revoir des id pour chaque element*/
array_unshift ($data_stock_post_array,$_POST);
file_put_contents("data.json", json_encode ($data_stock_post_array));
};
?>





 
    
  
    


<!------------------------------------------------------------------------------------------------------->

