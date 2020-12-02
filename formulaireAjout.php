<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enchère_Plateforme</title>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="src/css/VisuelEnchereList.css">
  <link rel="stylesheet" href="src/css/navbar.css">
</head>

<body>
  <!--AJOUT INCLUDE HEADER-->
  <?php include 'src/includes/header.php'?>
  <!--Ajout page des fonctions-->
<?php include 'src/includes/functions' ?>
    

  <!--Formulaire pour la saisie des données pour la déclaration d'une nouvelle enchere-->

  <div class="container-fluid d-flex justify-content-center">
    <h2>Ajouter une enchére :</h2>
  </div>



  <div class="container">
    <div class="row">
      <div class="col">
        left
      </div>
      <div class="col-6">

        <div>

        <!--Creéation formulaire et champs input -->

          <form name="MonFormulaire" method="post" action="traitement.php">
            <table>
              <tr>
                <td><label>NomProduit</label></td>
                <td><input type="text" name="nomProduit" required id="nomProduit"></td>
              </tr>

              <tr>
                <td><label>PrixInitial</label></td>
                <td><input type="text" name="prixInitial" required id="prixInitial"></td>
              </tr>

              <tr>
                <td><label>Prix du Clic</label></td>
                <td><input type="text" name="PrixClic" required id="PrixClic"></td>
              </tr>

              <tr>
                <td><label>Augmentation Prix</label></td>
                <td><input type="text" name="upClic" required id="upClic"></td>
              </tr>

              <tr>
                <td><label>Durée</label></td>
                <td><input type="text" name="Time" required id="Time"></td>
              </tr>

              <tr>
                <td><label>Augmentation duréé</label></td>
                <td><input type="text" name="TimeUp" required id="TimeUp"></td>
              </tr>





              <!--BOUTON DE VALIDATION A PARAMETRER-->
              <tr>
                <td><input type="submit" name="Nom" value="Envoyer"></td>
                <td></td>
              </tr>
            </table>
          </form>




        </div>








      </div>
      <div class="col">
        right
      </div>
    </div>


  </div>



















</body>