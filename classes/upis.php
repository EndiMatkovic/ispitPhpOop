<?php

include "/var/www/html/backend/ispitphpoop/connectDb.php";

class upis extends ConnectDb {

   public function getUsers()
   {
    $sql = 'SELECT * FROM osnovna';
    $stmt = $this->connect()->query ($sql);

    while ($row = $stmt->fetch()) {
        echo $row['Ime'] . '<br>';
    }
}
}

?>