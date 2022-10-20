<?php


   
    function anagram($argv){
        $fichier="/Users/nathan/epitech/-anagram-master/anagram-master-dictionnaire.txt";
        if(isset($argv[1])){
           trim($argv[1]);
           $mot=str_split($argv[1]);
           
        }
        else{
            echo "Vous n'avez pas rentrez de mot";
        }
        if(file_exists($fichier)){
            fopen($fichier,"r");
            foreach($mot as $fichier){
                echo $argv[1]."\n";
            }
            
        
        }
        else{
            echo"le fichier n'existe pas";
        }
        
        

}


    
anagram($argv);



   






