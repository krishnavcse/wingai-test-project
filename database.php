<?php

try{
    $connection = mysqli_connect('localhost', 'root', '','wingai',);

    if($connection) {

        return $connection;
    }else{
        throw new Exception('Connection Error');
    }

}catch(Exception $ex) {
    return $ex->getMessage();
}

?>