<?php

try{
    
    $pdo = new PDO('mysql:host=localhost;dbname=entertainment','root','');
  //echo'Connection Successfull'; 
      
  }catch(PDOException $f){
      
      echo $f->getmessage();
      
  }



?>