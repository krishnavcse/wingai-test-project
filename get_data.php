<?php
require 'database.php';

try {
    $query = 'SELECT * from `businesses`  where id=1';

    $data = mysqli_query($connection, $query);

    return $data;

}catch(Exception $ex) {
    return $ex->getMessage();
}


?>