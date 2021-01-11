<?php

#####   pour envoyer des messages flash meme apres une redirection ########


function FlashSet($key,$value){

            $_SESSION['Flash'][$key]=$value;
        }
        
 function FlashGet($key){
            if (!isset($_SESSION['Flash'][$key])){
                return '';
            }
            $temp=$_SESSION['Flash'][$key];
            $_SESSION['Flash'][$key]=NULL;
            return $temp;

        }
        
 function FlashInit($key)
        {

            if (isset($_SESSION['Flash'][$key])) {
                return 0;
            };
            $_SESSION['Flash'][$key]='';
        }

?>