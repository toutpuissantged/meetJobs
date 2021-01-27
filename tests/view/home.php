<?php include_once('../controller/home.php') ?>

<?php include_once('section/header.php') ?>
		<!--************************************
				Header End
		*************************************-->
		<div style="margin-top: 80px;">
			    <!--************************************
				Home Slider Start
		*************************************-->

    <div class="jf-sliderholder">
        <div class="jf-slidercontentholder">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-10 push-lg-1">
                        <div class="jf-slidercontent">
                            <h1 style="text-transform: none;">Une tonne d'options pour votre carrière</h1>
                            <div class="jf-description">
                                <p> " DITES OUI A L'EMPLOI " </p>
                            </div>

                            <form id="searchForm" action="<?php echo $GLOBALS['urlMap']['search'] ?>" method="POST" class="jf-formtheme jf-formbannersearch" autocomplete="off">
                                <fieldset class="jf-searcharea">
                                    <div class="jf-searchholder">
                                        <label><em class="lnr lnr-briefcase"></em><span>Emploi, Stage, Domaine, Compétence ...</span></label>
                                        <div class="form-group jf-inputwithicon">
                                            <input type="search" id="keyWords" name="keyWords" class="form-control" placeholder="Mot-clé (ex: commercial)">
                                        </div>
                                    </div>
                                    <div class="jf-searchholder">
                                        <label><em class="lnr lnr-apartment"></em><span>Lieu, ville, région, code Postal ...</span></label>
                                        <span class="jf-select">
											<select data-placeholder="All" class="chosen-select locations" name="jobLocation" id="jobLocation">
												<option value="">Localisation</option>
												<option value="lome">
													Région Maritime (Lomé)
												</option>
												<option value="atakpame">
													Région des Plateaux (Atakpamé)
												</option>
												<option value="sokode">
													Région Centrale (Sokodé)
												</option>
												<option value="kara">
													Région de la Kara (Kara)
												</option>
												<option value="dapaong">
													Région des Savanes (Dapaong)
												</option>
											</select>
										</span>
                                    </div>
                                    <div class="jf-searchbtn">
                                        <a href="javascript:void(0)" onclick="launchJobSearch()" class="jf-btn"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                </fieldset>
                                <input type="hidden" name="_token" value="R21iFA8hao6T5l8mUjxTGCuZLZ8GOG28MHBw14LR">
                            </form>
                            <div class="jf-btnsjobstags" style="padding-top: 30px">
                                <a href="<?php echo $GLOBALS['urlMap']['upload'] ?>" class="jf-btn" style="margin-bottom: 20px; text-transform: none; font-weight: 700">
                                    <i class="lnr lnr-briefcase"></i> Deposer mon cv
                                </a>

                                <a href="/meetJobs/tests/view/anonce.php" class="jf-btn" style="margin-bottom: 20px; text-transform: none; font-weight: 700">
                                    <i class="lnr lnr-briefcase"></i> Confiez-nous votre poste
                                </a>


                                <span>Notre plateforme vous propose plusieurs types de contrats de travail</span>
                                <ul class="jf-btnjobtags">
                                    <li>
                                        <div class="jf-btnjobtag" style="background-color: green">
                                            Temps Plein
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jf-btnjobtag" style="background-color: red">
                                            Temps Partiel
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jf-btnjobtag" style="background-color: purple">
                                            CDI/Indéterminé
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jf-btnjobtag" style="background-color: orange">
                                            CDD/Intérim/Mission
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jf-btnjobtag" style="background-color: #05b6f0">
                                            Stage/Apprentissage/Alternance
                                        </div>
                                    </li>
                                    <li>
                                        <div class="jf-btnjobtag" style="background-color: #4705f0">
                                            Indépendant/Freelance
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="jf-homeslidervone" class="jf-homeslidervone jf-homesliderone owl-carousel">
            <figure class="jf-sliderimg item">
                <img src="../../public/assets/public/images/slider/img-01.jpg" alt="image description">
            </figure>
            <figure class="jf-sliderimg item">
                <img src="../../public/assets/public/images/slider/img-02.jpg" alt="image description">
            </figure>
            <figure class="jf-sliderimg item">
                <img src="../../public/assets/public/images/slider/img-03.jpg" alt="image description">
            </figure>
            <figure class="jf-sliderimg item">
                <img src="../../public/assets/public/images/slider/img-04.jpg" alt="image description">
            </figure>
            <figure class="jf-sliderimg item">
                <img src="../../public/assets/public/images/slider/img-05.jpg" alt="image description">
            </figure>
        </div>
    </div>
    <!--************************************
            Home Slider End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="jf-main" class="jf-main jf-haslayout">
        <!--************************************
                Top Companies Start
        *************************************-->
        <section class="jf-haslayout jf-sectionspace">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="jf-sectionhead">
                            <h2 class="uppercase" style="font-size: 1em">
                                <i class="lnr lnr-apartment"></i>
                                Profils d'entreprises
                            </h2>
                            <a class="jf-btnviewall uppercase green" style="font-size: 0.8em" href="https://projects.daoscorporation.com/odile-job/public/partners">
                                Devenir un partenaire
                            </a>
                        </div>
                    </div>
                    <div class="jf-topcompaniesholder">
                        <div class="col-12 col-sm-12 col-md-10 push-md-1 col-lg-10 push-lg-1 float-left">
                            <div id="jf-topcompaniesslider" class="jf-topcompaniesslider jf-topcompanies owl-carousel">
                                <figure class="jf-topcompany item">
                                    <!--au click un modal de presentation-->
                                    <a class="jf-bglight" href="javascript:void(0)">
                                        <img src="../../public/assets/public/images/topcompanies/dcn.png" alt="image description">
                                    </a>
                                </figure>
                                
                                <figure class="jf-topcompany item">
                                    <a href="javascript:void(0)">
                                        <img src="../../public/assets/public/images/topcompanies/dcn.png" alt="image description">
                                    </a>
                                </figure>
                                <figure class="jf-topcompany item">
                                    <a class="jf-bglight" href="javascript:void(0)">
                                        <img src="../../public/assets/public/images/topcompanies/dcn.png" alt="image description">
                                    </a>
                                </figure>
                                <figure class="jf-topcompany item">
                                    <a href="javascript:void(0)">
                                        <img src="../../public/assets/public/images/topcompanies/dcn.png" alt="image description">
                                    </a>
                                </figure>
                                <figure class="jf-topcompany item">
                                    <a class="jf-bglight" href="javascript:void(0)">
                                        <img src="../../public/assets/public/images/topcompanies/dcn.png" alt="image description">
                                    </a>
                                </figure>
                                <figure class="jf-topcompany item">
                                    <a href="javascript:void(0)">
                                        <img src="../../public/assets/public/images/topcompanies/dcn.png" alt="image description">
                                    </a>
                                </figure>
                                <figure class="jf-topcompany item">
                                    <a class="jf-bglight" href="javascript:void(0)">
                                        <img src="../../public/assets/public/images/topcompanies/dcn.png" alt="image description">
                                    </a>
                                </figure>
                                <figure class="jf-topcompany item">
                                    <a href="javascript:void(0)">
                                        <img src="../../public/assets/public/images/topcompanies/dcn.png" alt="image description">
                                    </a>
                                </figure>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Top Companies End
        *************************************-->
        <!--************************************
                Featured Jobs Start
        *************************************-->
        <section class="jf-haslayout jf-sectionspace jf-bglight" id="jobssection">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="jf-sectionhead">
                            <h2 class="uppercase" style="font-size: 1em">
                                <i class="lnr lnr-briefcase"></i>
                                Les Nouveaux Jobs
                            </h2>
                            <a class="jf-btnviewall uppercase green" style="font-size: 0.8em" href="<?php echo $GLOBALS['urlMap']['home'];?>?jobLimite=all"><?php
                            global $showlink;
                            if ($showlink==TRUE) {
                            	echo "Voir tous les jobs";
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                
                <script type="text/javascript"
                        src="../../public/assets/public/js/jquery.countdown.min.js"></script>
                <div class="row">
                    <div class="jf-featuredjobs jf-featuredjobsvtwo jf-featuredjobsvthree">
                        <?php
                            echo $args[0] ;
                            
                        ?>
						
                </div>
            </div>
        </section>
        <!--************************************
                Featured Jobs End
        *************************************-->
<!--************************************
                Our Professionals Start
        *************************************-->
        <section class="jf-haslayout jf-sectionspace">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="jf-sectionhead">
                            <h2 class="uppercase" style="font-size: 1em">
                                <i class="lnr lnr-users"></i>
                                Notre Equipe
                            </h2>
                        </div>
                    </div>

                    <div class="jf-ourprofessionals justify-items-center">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
                                <div class="jf-ourprofessional">
                                    <div class="jf-professionaldetail">
                                        <figure class="jf-companyimg" style="background: url('../../public/assets/public/storage/authorsCovers/fvtR6FdUIPY8CpccPsK4qN5c0ViXPPla4FLEyjNT.png'); background-repeat: no-repeat;background-size: cover; background-position: center; border-radius: 100%">
                                        </figure>
                                        <div class="jf-professionalcontent">
                                            <div class="jf-professionalname">

                                                <h3>
                                                    <a href="#" target="_blank" style="text-transform: none;">
                                                        BAKOLA Odile
                                                    </a>
                                                </h3>
                                                <span>Directrice Générale de Go-Meet job<br>et Responsable de Go-Meetjob</span>
                                            </div>
                                            <span class="jf-totalviews">
												<i class="lnr lnr-envelope"></i><em>************</em>
											</span>
                                            <a class="jf-btn noneTextTransform uppercase" href="#" target="_blank">Voir le profile</a>
                                        </div>
                                    </div>
                                    <ul class="jf-professionalinfo">
                                        <li><i class="lnr lnr-eye"></i><span>0</span></li>
                                        <li><i class="lnr lnr-phone"></i><span>+33758069869</span></li>
                                        <li><i class="lnr lnr-heart"></i><span>0</span></li>
                                    </ul>
                                </div>
                            </div>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 float-left">
                                <div class="jf-ourprofessional">
                                    <div class="jf-professionaldetail">
                                        <figure class="jf-companyimg" style="background: url('../../public/assets/public/storage/authorsCovers/fvtR6FdUIPY8CpccPsK4qN5c0ViXPPla4FLEyjNT.png'); background-repeat: no-repeat;background-size: cover; background-position: center; border-radius: 100%">
                                        </figure>
                                        <div class="jf-professionalcontent">
                                            <div class="jf-professionalname">

                                                <h3>
                                                    <a href="#" target="_blank" style="text-transform: none;">
                                                        DANDO Elias
                                                    </a>
                                                </h3>
                                                <span>Responsabe opérationel et <br>Résentant de Go-Meetjob </span>
                                            </div>
                                            <span class="jf-totalviews">
												<i class="lnr lnr-envelope"></i><em>*************</em>
											</span>
                                            <a class="jf-btn noneTextTransform uppercase" href="#" target="_blank">Voir le profile</a>
                                        </div>
                                    </div>
                                    <ul class="jf-professionalinfo">
                                        <li><i class="lnr lnr-eye"></i><span>0</span></li>
                                        <li><i class="lnr lnr-phone"></i><span>+22893446256</span></li>
                                        <li><i class="lnr lnr-heart"></i><span>0</span></li>
                                    </ul>
                                </div>
                            </div>
                                                   
                </div>
            </div>
        </section>
        <!--************************************
                Our Professionals End
        *************************************-->
        <!--************************************
                Testimonials Start
        *************************************-->
              <!--************************************
                Testimonials End
        *************************************-->
        <!--************************************
            Blogs News Article Start
        *************************************-->
        <section class="jf-sectionspace jf-haslayout" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="jf-sectionhead">
                            <h2>Conseils & Actus</h2>
                            <a class="jf-btnviewall green uppercase" href="#" style="font-size: 0.8em">Voir tout</a>
                        </div>
                    </div>
                    <div class="jf-posts jf-blognews">
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 float-left">
                                <article class="jf-newsarticle">
                                    <figure class="jf-newsimg">
											<span class="jf-posttag">
												<a href="javascript:void(0);">
													<img src="../../public/assets/public/images/logo.png" style="height: 50px; width: auto; margin: 10px 0 10px 10px;">
													<span style="border: 1px solid #FFF; display: block; width: 150px; height: 40px; color: #FFF; text-transform: uppercase; font-weight: bold;">
														Lire l'article <i class="lnr lnr-eye"></i>
													</span>
												</a>

											</span>
                                        <img src="../../public/assets/public/images/blognews/img-03.jpg" alt="image description">
                                    </figure>
                                    <div class="jf-postauthorname">
                                        <figure class="jf-postauthorpic">
                                            <img src="../../public/assets/public/images/img_avatar.png" style="width: 50px; height: 50px; border-radius: 100%;">
                                        </figure>
                                        <div class="jf-articlecontent">
                                            <div class="jf-articletitle">
                                                <h3>
                                                    <a href="javascript:void(0);" class="noneTextTransform">Article name</a>
                                                </h3>
                                            </div>
                                            <span class="jf-authorname">
													<a href="javascript:void(0);" class="uppercase" style="font-size: 0.8em; color: grey">Article Author name</a>
												</span>
                                        </div>
                                    </div>
                                    <ul class="jf-postarticlemeta">
                                        <li>
                                            <i class="lnr lnr-calendar-full"></i>
                                            <span>Article Date</span>
                                        </li>
                                        <li>
                                            <i class="lnr lnr-tag"></i>#Domaine
                                        </li>
                                    </ul>
                                </article>
                            </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 float-left">
                                <article class="jf-newsarticle">
                                    <figure class="jf-newsimg">
											<span class="jf-posttag">
												<a href="javascript:void(0);">
													<img src="../../public/assets/public/images/logo.png" style="height: 50px; width: auto; margin: 10px 0 10px 10px;">
													<span style="border: 1px solid #FFF; display: block; width: 150px; height: 40px; color: #FFF; text-transform: uppercase; font-weight: bold;">
														Lire l'article <i class="lnr lnr-eye"></i>
													</span>
												</a>

											</span>
                                        <img src="../../public/assets/public/images/blognews/img-03.jpg" alt="image description">
                                    </figure>
                                    <div class="jf-postauthorname">
                                        <figure class="jf-postauthorpic">
                                            <img src="../../public/assets/public/images/img_avatar.png" style="width: 50px; height: 50px; border-radius: 100%;">
                                        </figure>
                                        <div class="jf-articlecontent">
                                            <div class="jf-articletitle">
                                                <h3>
                                                    <a href="javascript:void(0);" class="noneTextTransform">Article name</a>
                                                </h3>
                                            </div>
                                            <span class="jf-authorname">
													<a href="javascript:void(0);" class="uppercase" style="font-size: 0.8em; color: grey">Article Author name</a>
												</span>
                                        </div>
                                    </div>
                                    <ul class="jf-postarticlemeta">
                                        <li>
                                            <i class="lnr lnr-calendar-full"></i>
                                            <span>Article Date</span>
                                        </li>
                                        <li>
                                            <i class="lnr lnr-tag"></i>#Domaine
                                        </li>
                                    </ul>
                                </article>
                            </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 float-left">
                                <article class="jf-newsarticle">
                                    <figure class="jf-newsimg">
											<span class="jf-posttag">
												<a href="javascript:void(0);">
													<img src="../../public/assets/public/images/logo.png" style="height: 50px; width: auto; margin: 10px 0 10px 10px;">
													<span style="border: 1px solid #FFF; display: block; width: 150px; height: 40px; color: #FFF; text-transform: uppercase; font-weight: bold;">
														Lire l'article <i class="lnr lnr-eye"></i>
													</span>
												</a>

											</span>
                                        <img src="../../public/assets/public/images/blognews/img-03.jpg" alt="image description">
                                    </figure>
                                    <div class="jf-postauthorname">
                                        <figure class="jf-postauthorpic">
                                            <img src="../../public/assets/public/images/img_avatar.png" style="width: 50px; height: 50px; border-radius: 100%;">
                                        </figure>
                                        <div class="jf-articlecontent">
                                            <div class="jf-articletitle">
                                                <h3>
                                                    <a href="javascript:void(0);" class="noneTextTransform">Article name</a>
                                                </h3>
                                            </div>
                                            <span class="jf-authorname">
													<a href="javascript:void(0);" class="uppercase" style="font-size: 0.8em; color: grey">Article Author name</a>
												</span>
                                        </div>
                                    </div>
                                    <ul class="jf-postarticlemeta">
                                        <li>
                                            <i class="lnr lnr-calendar-full"></i>
                                            <span>Article Date</span>
                                        </li>
                                        <li>
                                            <i class="lnr lnr-tag"></i>#Domaine
                                        </li>
                                    </ul>
                                </article>
                            </div>
                                            </div>
                </div>
            </div>
        </section>
        <!--************************************
                Blogs News Article End
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->

		</div>

        
<?php include_once('section/footer.php') ?>