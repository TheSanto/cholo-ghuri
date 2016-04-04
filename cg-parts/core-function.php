<?php
function dbExist($dbName){
      $conn = mysqli_connect('localhost', 'root', 'toor');
      $cgQuery = mysqli_select_db($conn, 'cg_db');
      if($cgQuery){
            return true;
      }
      else 
            return false;
}


// Create database
function createDb($dbName=cg){
      $sql = "CREATE DATABASE ".$dbName;
      $conn = mysqli_connect('localhost', 'root', 'toor');
      if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
      } else {
            echo "Error creating database: " . $conn->error;
      }

      $conn->close();

}

//Function to create table
function createTable($dbName, $tblName){
      $cgDB = $dbName;
      $tableName = $tblName;
      $conn = mysqli_connect("localhost", "root", "toor", $cgDB);

      // Check connection
      if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      // Attempt create table query execution
      $cgquery = "CREATE TABLE $tableName(
      id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
      $tableName CHAR(30) NOT NULL)";

      if (mysqli_query($conn, $cgquery)){
            //echo "Table persons created successfully";
      } else {
            echo "ERROR: Could not able to execute $cgquery. " . mysqli_error($conn);
      }
      mysqli_close($conn);
}

//Function to check if table exist
function isTableExist($tableName){
      $conn = mysqli_connect('localhost', 'root', 'toor','cg_db');
      $query = "SELECT * FROM $tableName";
      if(mysqli_query($conn, $query)) {
            return false;
      }
      else return true;

      mysqli_close($conn);
} 
?>

