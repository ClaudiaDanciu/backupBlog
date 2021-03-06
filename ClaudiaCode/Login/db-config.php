<?php
//<!--Database credentials. Running MySQL server with default setting (user 'root' with no password)--> 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'blogdatabase');
 
// Attempt to connect to MySQL database and cath errors
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>


<!--//<php
//
//class DB {
//    
//    private static $instance = NULL;
//
//    //Singleton Design Pattern
//    public static function getInstance() {
//      if (!isset(self::$instance)) {
//        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
//        self::$instance = new PDO('mysql:host=localhost;dbname=blogDatabase', 'root', '', $pdo_options);
//      }
//      return self::$instance;
//    }
//}-->

