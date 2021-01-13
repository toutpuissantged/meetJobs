<?php include_once('../controller/editprofil.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../../public/tpg/boot.css">
    <link rel="stylesheet" href="../../public/assets/public/css/bootstrap.css">
    <link href="../../public/tpg/userProfil.css" rel="stylesheet">
    <script src="../../public/assets/public/js/vendor/jquery-3.3.1.js"></script>
    <style>
        input::placeholder{
            font-size: smaller;
        }
        #ignore{
            font-size: initial;
            text-align: center;

        }
        #light{
            color: white;
        }
    </style>
    <!------ Include the above in your HEAD tag ---------->

</head>
<body>
    <div class="container emp-profile">
            <form method="post"action="editprofil.php" >
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="../../model/upload/default-avatar.jpg" alt="image de profile"/>
                            <div class="file btn btn-lg btn-primary">
                                Changer La Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $nom.' '.$prenom; ?>
                                    </h5>
                                    <h6>
                                        <?php echo $profession ?>
                                    </h6>
                                    <p class="proile-rating"><input type="text" placeholder="vos certifications" id='ignore' name="certification"></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Liens Du Compte</p>
                            <a href="">Site Web</a><br/>
                            <input type="text" placeholder="coller le liens de votre site" name="siteWeb"><br>
                            <a href="#" class="btn btn-info text-light my-2" id="light">Importer votre Cv</a>
                            <a href="#" class="btn btn-danger text-light my-2" id="light">Ou en creer</a><br/>
                            <a href="">Page Facebook</a><br>
                            <input type="text" placeholder="coller le liens de profil facebook" name="facebook">
                            <p>Competences</p>
                            <a href="">analyste financier</a><br/>
                            <input type="text" placeholder="q'elle sont vos competences" name="competences">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" value="<?php echo $nom; ?>" name="nom">
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Prenom</label>
                                            </div>
                                            <div class="col-md-6">
                                            <input type="text" value="<?php echo $prenom; ?>" name="prenom">
                     
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $email; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Sexe</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="sexe" id="" name="sexe">
                                                    <option value="M">Masculin</option>
                                                    <option value="F">Feminin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" value="<?php echo $profession; ?>" name="profession">
                                               
                                            </div>
                                        </div><div class="row">
                                            <div class="col-md-6">
                                                <input type="submit" value="Valider" class="btn btn-info text-light rounded mt-3" >
                                                <a href="userProfil.php"class="btn btn-danger text-light rounded mt-3" >Annuler</a>
                                            </div>
                                            <div class="col-md-6">
                                               
                                               
                                            </div>
                                        </div>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>           
        </div>
</body>
</html>


