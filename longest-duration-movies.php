<?php

include_once 'connectdb.php';
echo 'success';

$select=$pdo->prepare("select primaryTitle,  runtimeMinutes, averageRating, genres from movies, ratings GROUP BY primaryTitle ORDER BY runtimeMinutes DESC LIMIT 10");
            
$select->execute();
        
while($row=$select->fetch(PDO::FETCH_OBJ)){

$response=$row;         // get out all $row values into this response variable

header('Content-Type: application/json');        // using of header to use of json data 


echo json_encode($response);


 //write to json file
//  $fp = fopen('response.json', 'w');
//  fwrite($fp, json_encode($response));
//  fclose($fp);
}






   
?>
