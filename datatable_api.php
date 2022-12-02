<?php
require 'database.php';

try {
    $query = 'SELECT * from `businesses`';

    $data = mysqli_query($connection, $query);

    return $data;

}catch(Exception $ex) {
    return $ex->getMessage();
}


?>