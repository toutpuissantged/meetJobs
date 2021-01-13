<?php

class upload
{
	public function img()
	{
		if ( !empty($_FILES['img']['name'])) {
	        $isupload=false;
	        $state=0;
	        $nomOrigine = $_FILES['img']['name'];
	        $elementsChemin = pathinfo($nomOrigine);
	        #var_dump($elementsChemin);
	        $extensionFichier = $elementsChemin['extension'];
	        $extensionsAutorisees = array("jpg", "png","sql");
	        if (!(in_array($extensionFichier, $extensionsAutorisees))) {
	             "Le fichier n'a pas l'extension attendue";
	            $state=1;
	        } 
	        else {    
	             //Copie dans le repertoire du script avec un nom
	            // incluant l'heure a la seconde pres 
	            $repertoireDestination = dirname(__FILE__)."/../../model/upload/";
	            $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;
	            //$nomDestination = $_SESSION['login'].".".$extensionFichier;

	            if (move_uploaded_file($_FILES["img"]["tmp_name"], 
	                                             $repertoireDestination.$nomDestination)) {
	               "Le fichier temporaire ".$_FILES["img"]["tmp_name"].
	                        " a été déplacé vers ".$repertoireDestination.$nomDestination;
	                $isupload=true;
	                $state=2;
	                $image=$nomDestination;
	                
	            } else {
	                 "Le fichier n'a pas été uploadé (trop gros ?) ou ".
	                        "Le déplacement du fichier temporaire a échoué".
	                        " vérifiez l'existence du répertoire ".$repertoireDestination;
	                $isupload=false;
	                $state=3;
	                
	            }

            }
             #echo "photo trouver";
            if ($upload=true) {
            	echo "fichiers uploader avec le nom".$nomDestination;
            }
        }
       
        else{
        	echo "aucun fichiers choisi";

        }
	}
}