<?php
include 'traitement.php' ?>
<!--GENERATEUR DES CARD AVEC LES INFOS DES POST-->
<div class="container-fluid d-flex justify-content-center">
  <h2>Enchère en cours</h2>
  
</div>


<!--D abord recuperer les donner inscrit sur json et les rendre accesible avec decode-->
<?php
$data_stock_post_string = file_get_contents('data.json');
$data_stock_post_array = json_decode($data_stock_post_string, true);
?>
<div class="container-fluid row d-flex justify-content-around">
  <!----------------------------------------------------------------------------------------->
  <!--Il faut que pour chaque tableaux present dans le json, on genere le nombre de card correspondante-->
  <?php

  foreach ($data_stock_post_array as $key => $items) {
   //echo $items['nomProduit'];
  ?>
  <!--A chaque nouvelle carte récuperer les donnée de json pour affecté aux bon emplcement sur le carte-->
    <div class="card-deck mt-5">
      <div class="card ">
        <div class="timer">
          <p><?=$items['time'];?></p>
        </div>
        <img src="../../ressource/img/<?php echo $items['choixImage'];?>" class="card-img-top"  type ="image" class="img-thumbnail" alt="...">
        <div class="card-body">
          <h5 class="card-title"> <?=$items['nomProduit'];?></h>
          <h6 class="card-title pt-3">Prix:<?=$items['prixInitial'];?> €</h6>
          <div class="card-text">
            <p>Prix/clic: <?=$items['PrixClic'];?>€</p>
            <p>Prix/enchère:€</p>
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
</div>
</div>