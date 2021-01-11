
<?php include_once('../controller/upload.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/upload/style.css">
    <link rel="stylesheet" href="../../public/assets/upload/main .css">
    <link rel="stylesheet" href="../../public/vendor/bootstrap.css">
    <link rel="apple-touch-icon" href="../../public/apple-touch-icon.png">
	<link rel="icon" href="../../public/assets/public/images/favicon.png" type="image/x-icon">
    <title>Upload Cv | Go-Meetjob</title>
</head>
<body>
    <div class="upload">
        <div class="upload-files">
         <header>
          <p>
           <i class="fa fa-cloud-upload" aria-hidden="true"></i>
           <span class="up">télé</span>
           <span class="load">charger</span>
          </p>
         </header>
         <div class="body" id="drop">
          <i class="fa fa-file-text-o pointer-none" aria-hidden="true"></i>
          <p class="pointer-none"><b>Glissez-déposez </b> les fichiers ici <br /> ou <a href="" id="triggerFile"> parcourez </a> pour commencer l'importation</p>
          <form enctype="multipart/form-data" action="<?php echo $GLOBALS['urlMap']['upload'] ?>" method="post">
                   <input type="file" multiple="multiple" name="files" />
                   
         </div>
         <input type="submit" value="valider" class="uploadButton">
         <footer>
          <div class="divider">
           <span><AR>FILES</AR></span>
          </div>
          <div class="list-files">
           <!--   template   -->
          </div>
                   <button class="importar">UPDATE FILES</button>
         </footer>
        </form>
        </div> 
       </div>
       <?php
       echo $args[0];
       ?>

</body>
<script src="../../public/assets/upload/script.js"></script>
</html>