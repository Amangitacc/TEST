<?php

include_once 'connectdb.php';

if(isset($_POST['btnsubmit'])){
    $newmovies = $_POST['newmovie'];

    $insert=$pdo->prepare("insert into movies(primaryTitle) values(:name)"); 
    
    $insert->bindParam(':name',$newmovies);

    if( $insert->execute()){

        echo 'success';
    } else{

        echo 'failed';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <form action="" method="post">
<input type= "text" name="newmovie" placeholder="Movie name"/>
<input type ="submit" name="btnsubmit" placeholder="Submit"/>
</form>
</body>
</html>