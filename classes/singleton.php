<?php 

class singleton {
    
    private static $instance = null;
    private $conn;


    private $host = "localhost";
    private $user = "root";
    private $pasword = "password";
    private $dbName = "ImePrezimeGod";


    private function __construct(){
        $this->conn = new PDO("mysql:host=$host;dbname=$dbName", $this->user, $this->pasword);
    }
    

    public static function getInstance(){

        if (!self::$instance){
            self::$instance = new ConnectDB();
        }

        return self::$instance;
    }

    public function getConnection(){
        return $this->conn;
    }
    
    /*public static $connection;

    private function __construct() {
        echo "Konekcija uspjesna";
    }

    public static function Connect (){

        if (!isset(self::$connection)){
            self::$connection = new Database;
        }

        return self::$connection;
    }*/

}  


?>