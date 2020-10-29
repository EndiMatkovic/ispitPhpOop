<?php

include __DIR__ . "/config.php";



class ConnectDb extends Config{

    public function connect (){
        $con = new PDO("mysql:host=$host;dbname=$dbName", $user, $pasword);
    
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection success";

        return $con;
    
    }
    

    /*public function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->password);
        $pdo->setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }*/
}




?>