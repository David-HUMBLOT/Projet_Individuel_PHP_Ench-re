<?php
include 'traitement.php'
?>
<!--GENERATEUR DES CARD AVEC LES INFOS DES POST-->


<!--D abord recuperer les donner inscrit sur json et les rendre accesible avec decode-->
<?php
$data_stock_post_string = file_get_contents('data.json');
$data_stock_post_array = json_decode($data_stock_post_string, true);
?>


<!----------------------------------------------------------------------------------------->
  <!--Il faut que pour chaque tableaux present dans le json, on genere le nombre de card correspondante-->
  <?php
  foreach ($data_stock_post_array as $value) {
    echo 'TEST ok ';
  ?>
<div class="card-deck mt-5">
    <div class="card ">
      <div class="timer">
        <p>TIMER</p>
      </div>
      <img src="ressources/img/no_image.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">NOM PRODUIT</h4>
        <h5 class="card-title">Prix :</h5>
        <div class="card-text">
          <p>Prix/clic: </p>
          <p>Prix/enchère: </p>
        </div>
        <form>
          <button type="button" class="btn btn-success">Enchérir</button>
        </form>
      </div>
    </div>
  </div>
    <?php
  };

    ?>
<!----------------------------------------------------------------------------------------------------->
  
    
 


     







  



