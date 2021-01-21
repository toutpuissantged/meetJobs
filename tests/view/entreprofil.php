<?php include_once('../controller/entreprofil.php') ?>

<?php include_once('section/header.php') ?>

<div class="container">
<h1 class="bg-light text-light pt-5 mt-5 text-center" style="color:white"> Votre page de Profil </h1>
  <!-- Portfolio Item Heading -->
  <h1 class="my-4"><?php echo $args[1]; ?>
    <small> @Entreprise </small>
    <a href="/meetjobs/" title="" class="btn btn-success"><i class="fas fa-home"></i> </a>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid rounded" src="../../model/upload/27.jpg" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">Qui sommes nous ?</h3>
      <p>Nous sommes une entreprise de developement de site web et d'application web mobile et de bureau </p>
      <h3 class="my-3">Nos Services</h3>
      <ul>
        <li>Lorem Ipsum</li>
        <li>Dolor Sit Amet</li>
        <li>Consectetur</li>
        <li>Adipiscing Elit</li>
      </ul>
      <a href="" title="" class="btn btn-success"> voir les candidats </a>
    <a href="<?php echo $GLOBALS['urlMap']['annonce']?>" title="" class="btn btn-warning"> publier une annonce </a>
    </div>
    
  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Dernier offre d'emploie</h3>

  <div class="row">
  	<?php echo $args[0];?>
    <!--<div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="../../model/upload/27.jpg" alt="">
          </a>
        <p>salut</p>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="../../model/upload/27.jpg" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="../../model/upload/27.jpg" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="../../model/upload/27.jpg" alt="">
          </a>
    </div>
	-->
  </div>

</div>
<!-- /.container -->

</body>
</html>