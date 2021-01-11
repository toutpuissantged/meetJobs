<?php 

include('../core/run.php');
session_start();

/*******************************************************
  *  Déclaration de la fonction
  *******************************************************/
 
  /**
   *  La fonction force le téléchargement d'un fichier
   *
   * @author : Hugo HAMON
   * @param : string $nom nom du fichier
   * @param : string $situtation emplacement sur le serveur web
   * @param : integer $poids poids du fichier en octets
   * @return : void
   **/
  function forcerTelechargement($nom, $situation, $poids)
  {
    header('Content-Type: application/octet-stream');
    header('Content-Length: '. $poids);
    header('Content-disposition: attachment; filename='. $nom);
    header('Pragma: no-cache');
    header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    readfile($situation);
    exit();
  }
 
  /*******************************************************
  *  Appel de la fonction
  *******************************************************/

  function main()
  {
  	 $matricule=$_SESSION['id'];
	 echo FlashGet('userProfil');
  	 $filename='../../model/upload/'.$matricule.'.pdf';
        
        $fileEx=file_exists($filename );
        #var_dump($fileEx);
        $downloadCv='';
        $downloadValid='';

        if ($fileEx==TRUE) {
            $downloadCv=$filename;
            $downloadValid='download="'.$nom.$prenom.'.pdf"';
            FlashSet('home','cv telecgarger avec success');
            $name=FlashGet('ProfilName');
            forcerTelechargement($name.'.pdf', './documents/compte.pdf', filesize($filename));
        }
        else{
            FlashSet('userProfil','le candidat n\'a pas de cv');
            $downloadCv='';
        }

        header('location /meetJobs/tests/controller/userProfil.php');
  	
  }
main();
  

?>