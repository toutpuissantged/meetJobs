<?php include_once('../controller/showjobs.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	    <link rel="stylesheet" href="../../public/assets/public/css/bootstrap.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="../../public/tpg/boot.css">
</head>
<body>
	<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4"><?php echo $args[1]; ?>
    <small> @Entreprise </small>
    <a href="<?php echo $GLOBALS['urlMap']['home'] ?>" title="" class="btn btn-info">Allez a l'acueille</a>
  </h1>
  <?php  
  $Flash =new Flash;
  echo $Flash->Get('showjobs');
  #echo "hello";

?>
  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="../../model/upload/<?php echo $args[2]['image']; ?>" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3"><?php echo $args[2]['post']; ?> <a href="" title="" class="btn btn-info"><?php echo $args[2]['contrat']; ?> </a></h3>
      <p><?php echo $args[2]['description']; ?></p>
      <h3 class="my-3">Diplome</h3>
      <p> <?php echo $args[2]['niveau']; ?></p>
      <h3 class="my-3">salaire </h3>
      <p> Minimum est  <?php echo $args[2]['salaireMin']; ?>FCFA</p>
      <p> Maximum est  <?php echo $args[2]['salaireMax']; ?>FCFA</p>
      <h3 class="my-3">Validiter</h3>
      <p><a href="#" title="" class="btn btn-info">Valide</a></p>
      <?php  echo $args[3] ?>
      
    <a href="<?php echo '/meetJobs/tests/view/showentreprise.php?id='.$args[4]?>" title="" class="btn btn-danger"> voir profil de l'entreprise</a>
    </div>
    
  </div>
  <!-- /.row -->
  <!--- modal --->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle">Action non autoriser</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        Vous devez vous connecter entant que particulier pour postulez a un offre d'emploie <br>Pour continuer veillez vous connecter 
      </div>
      <div class="modal-footer">
        <a href="<?php echo $GLOBALS['urlMap']['login'] ?>" class="btn btn-primary">Se connecter</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        
      </div>
    </div>
  </div>
</div>
  <!--- modal --->

  <!-- Related Projects Row -->
  <h3 class="my-4">Dernier offre d'emploie de <?php echo $args[1]; ?> </h3>

  <div class="row">
  	<?php echo $args[0];?>
  </div>

</div>
<!-- /.container -->

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js" integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA==" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(function () {
  $('[data-toggle="popover"]').popover()
})</script>
</html>