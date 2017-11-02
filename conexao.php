<?php
    class Conexao{
        public function getconexao(){
            try{
               // $con = new PDO('mysql:host=localhost;dbname=biblioteca','sa_biblioteca','b1bl10t3c4');
                $con = new PDO('mysql:host=localhost;dbname=biblioteca','sa_biblioteca','123admin321');
                return $con;
            }
            catch (PDOException $erro){
     
            echo $erro->getMessage();
                echo $erro->getCode();
            }
        }
    }
 


  
 
      
  

   
    
   

   
    


    
     
    

  
   
     
    

?>