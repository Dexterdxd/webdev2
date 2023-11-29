<?php 
  DEFINE('DB_User', 'root');
  DEFINE('DB_Password','');
  DEFINE('DB_Host','localhost');
  DEFINE('DB_Name','dbschedule');

  $dbc = @mysqli_connect(DB_Host, DB_User, DB_Password, DB_Name)
  or die('Could not connect to MySQL: '. mysqli_connect_error());
?>

<!-- <?php

// class Database{
//     private $host = 'localhost';
//     private $username = 'root';
//     private $password = '';
//     private $database = 'spicypizza';
//     protected $connection;

//     function connect(){
//         try 
// 			{
// 				$this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", 
// 											$this->username, $this->password);
// 			} 
// 			catch (PDOException $e) 
// 			{
// 				echo "Could not connect to MySQL: " . $e->getMessage();
// 			}
//         return $this->connection;
//     }

// }

?> -->