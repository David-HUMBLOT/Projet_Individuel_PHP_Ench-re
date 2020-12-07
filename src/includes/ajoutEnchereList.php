<!--GENERATEUR DE CARD ENCHERE-->


<?php include 'traitement.php' ?>

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
        <div class="time" id="<?php echo $items['id']; ?>">  

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

      <script>
        //Gestion du timer by Vincent
        var timer = setInterval(function countDown() {
          var tempAct = new Date(); //On recupere la date UNIX
          var heure = Math.floor(tempAct.getTime() / 1000); //On transforme la date en secondes depuis la date fixe UNIX
          var timeRemaining = <?php echo $items['date_fin'] ?> - heure; //On compare les secondes depuis date fixe UNIX PHP à JS
          var hoursRemaining = parseInt(timeRemaining / 3600); // conversion en heures
          var minutesRemaining = parseInt((timeRemaining % 3600) / 60); // conversion en minutes
          var secondsRemaining = parseInt((timeRemaining % 3600) % 60); // conversion en secondes
          //On attribue l'id de l'enchere dans la zone où il y a le timer et on dit que l'on souhaite afficher le timer
          document.getElementById('<?= $items['id'] ?>').innerHTML = hoursRemaining + ' h : ' + minutesRemaining + ' m : ' + secondsRemaining + ' s ';
          if (timeRemaining <= 0) { //Sinon on met expire et on desactive le bouton encherir
            document.getElementById('<?= $items['id'] ?>').innerHTML = "EXPIRE";
            document.getElementById('_<?= $items['id'] ?>').setAttribute('disabled', ''); // Bouton disabled quand temps expiré
            document.getElementById('_<?= $items['id'] ?>').classList.remove('btn-listEnchere');
            document.getElementById('_<?= $items['id'] ?>').classList.add('btn-listEnchere2');
          }
        }, 1000); // répéte la fonction toutes les 1 seconde
      </script>




    </div>




  <?php endforeach; ?>
</div>
</div>