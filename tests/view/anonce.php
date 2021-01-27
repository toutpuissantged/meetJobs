<?php include_once('../controller/anonce.php') ?> 
<?php include_once('section/header.php') ?>
<h1 class="bg-light text-light pt-5 mt-5 text-center" style="color:white"> Votre page de Profil </h1>
    <link rel="stylesheet" href="../../public/vendor/bootstrap.css">
    <h1 class="bg-success rounded shadow p-4 text-center text-light m-5">publiez une nouvelle annonce <br> <a class="h6" href="<?php echo $GLOBALS['urlMap']['home'] ?>"> retournez a l'accueil </a></h1>

    
    <form class="needs-validation shadow p-5 mt-5 rounded " action="<?php echo $GLOBALS['urlMap']['annonce'] ?>" method="post" enctype="multipart/form-data" novalidate>
       
        <div class="container row">
            
        <div class="col-4"></div>
        <div class=" col-6 p-3 ">
            <?php
                print($args[0])
            ?>
            <label for="pseudo" class="h6">Type de contrat</label>
            <select class="custom-select" name="contrat" class="col" id="contrat" required>
              <option value="TempsPlein">Temps Plein</option>
              <option value="TempsPartiel">Temps Partiel</option>
              <option value="CDI">CDI/Indetermine</option>
              <option value="CDD">CDD/Intérim/Mission </option>
              <option value="Stage">Stage/Apprentissage/Alternance </option>
              <option value="Freelance">Indépendant/Freelance </option>
            </select>
            <br><br><br>
            <!--<div class="custom-file">
              <label for="img">Image correspondant</label><br>
              <input type="file" class="col-12 p-2" placeholder="image" name="img" id="img">
              <br><br>
            </div>-->
            <div class="custom-file h6">
              <input type="file" class="custom-file-input form-control" name="img" id="img" required>
              <label class="custom-file-label" for="img">Choisir L'image de votre anonce</label>
              <div class="invalid-feedback">Aucune image choisie</div>
              <br>
            </div>
            <div>
                <label for="post" class="h6">Post</label><br>
                <input type="text" class="col-12 p-2 form-control" placeholder="Stage en marketing Commercial" name="post" id="post" required>
                <div class="invalid-feedback">Valeur incorrecte</div>
                <br><br>   
            </div>
            <div>
                <label for="expire" class="h6">Durer de validiter de l'offre </label><br>
                <input type="date" class="p-2 form-control " placeholder="01/14/2020" name="expire" id="expire" required>
                <div class="invalid-feedback">Valeur incorrecte</div>
                <br><br>
            </div>
            <div>
                <label for="localisation" class="h6">Localisation</label><br>
                
                <select class="custom-select " name="localisation" id="localisation" required>
                <option value="lome">Région Maritime (Lomé)</option>
                <option value="atakpame">Région des Plateaux (Atakpamé)</option>
                <option value="sokode">Région Centrale (Sokodé)</option>
                <option value="kara">Région de la Kara (Kara)</option>
                <option value="dapaong">Région des Savanes (Dapaong)</option>
                </select>
                <div class="invalid-feedback">Valeur incorrecte</div>
                <br><br>
            </div>
            <div>
                <label for="description" class="h6">Description</label><br>
                <textarea name="description" placeholder="Nous recherchons un (e) Chargé (e) de Clientèle pour mettre en place une stratégie" class=" col-12 p-2 form-control" id="description" cols="30" rows="10" required></textarea>
                <div class="invalid-feedback">Valeur incorrecte</div>
                <br><br>
            </div>
            <div>
                <label for="niveau" class="h6">Niveau D'etude</label><br>
                <select class="custom-select " name="niveau" >
                <option value="Autodidacte">Autodidacte</option>
                <option value="BAC">BAC</option>
                <option value="BAC+2">BAC+2</option>
                <option value="BAC+3">BAC+3</option>
                <option value="BAC+5">BAC+5</option>
                </select>
                <br><br>
            </div>
            <div>
                <label for="salaireMin" class="h6">Salaire minimal</label><br>
                <input type="number" placeholder="50 000" class="col-12 p-2 form-control" name="salaireMin" id="salaireMin" required>
                <div class="invalid-feedback">Valeur incorrecte</div>
                <br><br>
            </div>
            <div>
                <label for="salaireMax" class="h6">Salaire maximal</label><br>
                <input type="number" placeholder="100 000" class="col-12 p-2 form-control" name="salaireMax" id="salaireMax" required>
                <div class="invalid-feedback">Valeur incorrecte</div>
                <br><br>
            </div>
            
            <input type="submit" class="btn btn-info p-2 col-12  my-2" value="valider">
          </div>
        </div>

    </form>

<script>
    /*La fonction principale de ce script est d'empêcher l'envoi du formulaire si un champ a été mal rempli
     *et d'appliquer les styles de validation aux différents éléments de formulaire*/
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        let forms = document.getElementsByClassName('needs-validation');
        let validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script> 
<?php include_once('section/footer.php') ?>