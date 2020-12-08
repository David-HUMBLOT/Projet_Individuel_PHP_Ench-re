<!--GENERATEUR DE CARD ENCHERE-->


<?php include 'traitement.php' ?>
<?php include 'functions.php' ?>

<div class="container-fluid d-flex justify-content-center">
  <h2>Enchère en cours</h2>
</div>
<!--D abord recuperer les donner inscrit sur json et les rendre accesible avec decode-->
<?php $data_stock_post_string = file_get_contents('data.json');
$data_stock_post_array = json_decode($data_stock_post_string, true); ?>
<div class="container-fluid row d-flex justify-content-around">
  <!--Pour chaque tableaux present dans le json, on genere le nombre de card correspondante-->
  <?php foreach ($data_stock_post_array as $key => $items) : //echo $items['nomProduit'];
  ?>
    <!--A chaque nouvelle carte récuperer les donnée de json pour affecté aux bon emplcement sur le carte-->
    <div class="card-deck mt-5">
      <div class="card ">
        <div class="time"  id="<?php echo $items['id']; ?>">
          <p><?php echo $items['time']; ?>&nbspH</p>
          <P><?php echo $items['fin_date'];?></P>
          <div class="duree d-flex position-absolute w-50 justify-content-center align-items-center font-weight-bold"
                    id="<?= $items['id']?>"></div>

          

        </div>
        <img src="ressources/img/<?php echo $items['choixImage']; ?>" class="card-img-top" type="image" alt="..." style="max-height:290px!important;max-width:17.5em!important;">
        <div class="card-body">
          <h5 class="card-title"> <?= $items['nomProduit']; ?></h>
            <h6 class="card-title pt-3">Prix Enchere : &nbsp<?= $items['prixInitial']; ?> €</h6>
            <div class="card-text">
              <p>Prix du clic: &nbsp <?= $items['PrixClic']; ?>€</p>
              <p>Pour &nbsp<?= $items['upClic']; ?>&nbsp€ ajouté à l'enchère</p>

            </div>
            <form method="POST" action="#<?= $items['id'] ?>">
              <!--atribution d 'un id unique à a cahaque card avec la finction identification qui attribue un id unique-->

              <button id="<?= $items['id'] ?>" name="encherir" type="submit" value="<?= $items['id'] ?>" class="btn btn-success" action="">Enchérir</button>
            </form>
        </div>
      </div>
    </div>
    
  <?php endforeach; ?>
</div>


</div>



<script>
            //Gestion du timer by Vincent
                var timer = setInterval(function countDown() {
                    var tempAct = new Date(); //On recupere la date UNIX
                    var heure = Math.floor(tempAct.getTime() / 1000); //On transforme la date en secondes depuis la date fixe UNIX
                    var timeRemaining = <?php echo $items['fin_date']?> - heure; //On compare les secondes depuis date fixe UNIX PHP à JS
                    var hoursRemaining = parseInt(timeRemaining / 3600); // conversion en heures
                    var minutesRemaining = parseInt((timeRemaining % 3600) / 60); // conversion en minutes
                    var secondsRemaining = parseInt((timeRemaining % 3600) % 60); // conversion en secondes
                    //On attribue l'id de l'enchere dans la zone où il y a le timer et on dit que l'on souhaite afficher le timer
                    document.getElementById('<?= $items['id'] ?>').innerHTML = hoursRemaining + ' h : ' + minutesRemaining + ' m : ' + secondsRemaining + ' s ';
                    if (timeRemaining <= 0) {//Sinon on met expire et on desactive le bouton encherir
                        document.getElementById('<?= $items['id'] ?>').innerHTML = "EXPIRE";
                        document.getElementById('_<?= $items['id'] ?>').setAttribute('disabled', ''); // Bouton disabled quand temps expiré
                        document.getElementById('_<?= $items['id'] ?>').classList.remove('btn-listEnchere');
                        document.getElementById('_<?= $items['id'] ?>').classList.add('btn-listEnchere2');
                    }
                }, 1000); // répéte la fonction toutes les 1 seconde
            </script>


























<?php


    $heures   = 10;  // les heures < 24
    $minutes  = 0;   // les minutes  < 60
    $secondes = 0;  // les secondes  < 60
    $annee = date("Y");  // par defaut cette année
    $mois  = date("m");  // par defaut ce mois
    $jour  = date("d");  // par defaut aujourd'hui
    /*******************************************************************************
     * calcul des secondes
     ***************************************************************************/
    $secondes = mktime(
      date("H") + $heures,
      date("i") + $minutes,
      date("s") + $secondes,
      $mois,
      $jour,
      $annee
    ) - time();
?>
    <script>
      var temps = <?php echo $secondes; ?>;
      var timer = setInterval('CompteaRebour()', 1000);
      function CompteaRebour() {
        temps--;
        j = parseInt(temps);
        h = parseInt(temps / 3600);
        m = parseInt((temps % 3600) / 60);
        s = parseInt((temps % 3600) % 60);
        document.getElementById('<?= $items['minutes'] ?>').innerHTML = (h < 10 ? "0" + h : h) + '  h :  ' +
          (m < 10 ? "0" + m : m) + ' mn : ' +
          (s < 10 ? "0" + s : s) + ' s ';
        if ((s == 0 && m == 0 && h == 0)) {
          clearInterval(timer);
          <?php echo 'expirer'; ?>
        }
      }
    </script>
    <?php
    // la condition est que le nombre de seconde soit etre superieur a 24 heures
    if ($secondes <= 3600 * 24) {
    ?>
      <span style="font-size: 36px;"> temps</span>
      <div id="minutes". style="font-size: 36px;"></div></span>
<?php
    }


?>




