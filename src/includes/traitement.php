

<?php 

$json = 'data.json';
if('data.json'==[]){
    echo ("<p>c'est vide</p>");
};


/**AJOUT EST EFFECTUER */
if (isset($_POST["ajoutEnchere"]))
{  $data_stock_post =  array(
'nomProduit' => $_POST['nomProduit'],
'prixInitial' => $_POST['prixInitial'],
'PrixClic' => $_POST['PrixClic'],
'upClic' => $_POST['upClic'],
'time' => $_POST['time'],
'upTime' => $_POST['upTime'],
'choixImage' => $_POST['choixImage'], 
'identification' => identification(),
 );
 /**servira à recuperer une enchere particuliere _ AJoUT D UN NOUVELE ELEMENT A JSON SANS ECRASER LA DONN2 EXISTANT _ ouvrir (decode) le fichier dans une var $tab*/

$data_stock_post_string = file_get_contents('data.json');
$data_stock_post_array = json_decode($data_stock_post_string, true);
/**mettre $data_stock_post dans la var $tab __ $data_stock_post_array =  $data_stock_post_string.json_encode($data_stock_post); _ enregistret cette modif dans data.json 
UNE FOIS LES DONN2E ENREGISTRER IN VEUT QUE A CHAQUE SUBMIT ON GENERER L AFFICHAGE DE LA CARD AVEC LES DONN2ES POST EN QUESTION Recuperer sur le json à son bon emplacemnt, ^revoir des id pour chaque element*/
array_unshift ($data_stock_post_array,$_POST);
file_put_contents("data.json", json_encode ($data_stock_post_array));

};

?>
<?php 
//il nous manque des id achaque card, on fait la function qui attribue des id et cette fonction est placé a la suite des valeur POST de json pares le isset POST
function identification(){
    $idEnchere = md5(uniqid(rand(), true)); 
    $_POST['id'] = $idEnchere;
};

//Une fois fait il faut récupérer l'id générer quand SI clique sur enchérir afin de modifier  la carte cible dans la listes des enchere.
//POUR CHAQUE element du tableaux json dont la KEYS est identique à ID generer par la fonction Identification()
//On en profit comme pour id pour generer la date de fin lié au temps défini ainsi que le gain engendré par clic
//ne pas oublier de ouvrir json le decode afin d y ajouter les modif apres le encode.

if (isset($_POST['encherir'])){ //si le bouttin un des button encherir est cliqué alors faire
identification();
    
    $data_stock_post_enrechir = file_get_contents('data.json'); //recupere json
    $data_stock_post_array_encherir = json_decode($data_stock_post_encherir, true);//on décode json pour etre utilisable
    $id=$_GET['id'];
    var_dump (json_encode('data.json'));

    $_POST['prixInitial'] = $_POST['prixInitial'] + $_POST['upClic'];
    var_dump(json_decode($json));


 //pour chaque tableaux de json 
 
    foreach($data_stock_post_array_encherir  as $key => $items){
        $id = $_POST['id'];
        $data_stock_post_enrechir = file_get_contents('data.json');
        $data_stock_post_array_encherir = json_decode($data_stock_post_encherir, true);
        
        if ($items['id'] == $id){
            $data_stock_post_enrechir = file_get_contents('data.json');
            $data_stock_post_array_encherir = json_decode($data_stock_post_encherir, true);
           echo $id;

            $_POST['prixInitial'] = $_POST['prixInitial'] + $_POST['upClic'];
            $items['finEnchere'] = $items['finEnchere'] + $items['upTime'];
            $_POST['ajoutEnchere'][$key]['prixInital'] =  $items['prixInitial'];   
        }   
        array_unshift ($data_stock_post_array_enrechir,$_POST);
        file_put_contents("data.json", json_encode ($data_stock_post_array_encherir));
    };





    foreach($_POST['ajoutEnchere'] as $key => $items){
      print_r ('okq');
        $id=$_GET['id'];
        if ($items['id'] == $id){
          
            $data_stock_post_enrechir = file_get_contents('data.json');
            $data_stock_post_array_encherir = json_decode($data_stock_post_encherir, true);
            echo $id;

            $_POST['prixInitial'] = $_POST['prixInitial'] + $_POST['upClic'];
            $items['finEnchere'] = $items['finEnchere'] + $items['upTime'];
            $_POST['ajoutEnchere'][$key]['prixInital'] =  $items['prixInitial'];   
        }
    }
 
    array_unshift ($data_stock_post_array_enrechir,$_POST);
    file_put_contents("data.json", json_encode ($data_stock_post_array_encherir));
};



?>





 
    
  
    


<!-----------------------------
//Ici on gere l'ajout du prix à augmenter
    if(isset($_POST['ajoutEnchere'])){
        $id = $_POST['identification']; //
        foreach($_POST['ajoutEnchere'] as $key => $items){
            if($items['id'] == $id){
                $items['prixInitial'] = $items['prixInitial'] + $items['upClic'];
                $items['date_fin'] = $items['date_fin'] + $items['upClic'];
                $items['gain'] = $items['gain'] + $items['PrixClic'];
                $_POST['ajoutEnchere'][$key]['prix_lancement'] =  $items['prix_lancement'];
                $_POST['ajoutEnchere'][$key]['date_fin'] =  $items['date_fin'];
                $_POST['ajoutEnchere'][$key]['gain'] =  $items['gain'];
            }
        }
    }
-------------------------------------------------------------------------->

