<?php include_once('../controller/showpostule.php') ?>
<style type="text/css">
		html {
    font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
    font-size: 14px;
}

h5 {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
    margin: 0;
}

.card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
}

.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

.profile {
    position: absolute;
    top: -12px;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 25px;
    height: 25px;
    margin: 0;
    border: 1px solid #fff;
    border-radius: 50%;
}

.profile-avatar {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.profile-inline {
    position: relative;
    top: 0;
    display: inline-block;
}

.profile-inline ~ .card-title {
    display: inline-block;
    margin-left: 4px;
    vertical-align: top;
}

.text-bold {
    font-weight: 700;
}

.meta {
    font-size: 1em;
    color: rgba(0, 0, 0, .4);
}

.meta a {
    text-decoration: none;
    color: rgba(0, 0, 0, .4);
}

.meta a:hover {
    color: rgba(0, 0, 0, .87);
}
	</style>
<?php include_once('section/header.php') ?>
	


	
<!------ Include the above in your HEAD tag ---------->

<section>
    <h1 class="text-center p-5 bg-dark text-light"> Offre publier <a href="/meetjobs/" title=" retourner a l'accueil" class="btn btn-success"><i class="fas fa-home"></i></a> </h1>
  <div class="container py-3">
    <div class="card">

      <div class="row ">
        <div class="col-md-4">
            <img src="../../model/upload/<?php echo $args[0]['image'] ?>" class="w-100" style="max-height: 300px">
          </div>
          <div class="col-md-8 px-3">
            <div class="card-block px-3">
              <h4 class="card-title"><?php echo $args[0]['post'] ?> @<?php echo $args[0]['name'] ?></h4>
              <p class="card-text"><?php echo $args[0]['description'] ?></p>
              <p class="card-text"><?php echo $args[0]['salaireMax'] ?> > salaire > <?php echo $args[0]['salaireMin'] ?></p>
               <p class="card-text">societe size a <?php echo $args[0]['localisation'] ?></p>
              <a href="#" class="btn btn-success">valide</a>
              <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-trash-alt"></i></a>
              <a href="/meetJobs/tests/view/entreProfil.php" class="btn btn-success"><i class="fas fa-undo-alt"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLongTitle"><i class="fas fa-exclamation-triangle mx-1"></i>Attention</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Voulez vous vraiment suprimer cet offre ? <br> cet action est ireversible 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <a href="#" class="btn btn-success">Suprimer</a>
      </div>
    </div>
  </div>
</div>

<div class="container">
        <div class="row">  
            <!--<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://picsum.photos/200/150/?random" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Card title</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-success">Go somewhere</a>
	  		  </div>
		    </div>-->
		    <?php echo $args[1] ?>
        </div>
</div>
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