<?php
function dbExist($dbName){
      $conn = mysqli_connect(HOST, USER, PWD);
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
      $conn = mysqli_connect(HOST, USER, PWD);
      if ($conn->query($sql) === TRUE) {
            //echo "Database created successfully";
      } else {
            echo "Error creating database: " . $conn->error;
      }

      $conn->close();

}

//Function to create table
function createTable($dbName, $tblName){
      $cgDB = $dbName;
      $tableName = $tblName;
      $conn = mysqli_connect(HOST, USER, PWD, CGBD);

      // Check connection
      if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      if($tableName == 'categories'){
            $cgquery = "CREATE TABLE $tableName(
            id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
            $tableName CHAR(30),
            parent CHAR(30),
            other CHAR(30))";
      }
      elseif($tableName == 'spots'){
            $cgquery = "CREATE TABLE $tableName(
            id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
            $tableName CHAR(30),
            sibling CHAR(30),
            other CHAR(30))";
      }else{
            $cgquery = "CREATE TABLE $tableName(
            id INT(4) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
            $tableName CHAR(30),
            other CHAR(30))";
      }

      if (mysqli_query($conn, $cgquery)){
            //echo "Table created successfully";
      } else {
            echo "ERROR: Could not able to execute $cgquery. " . mysqli_error($conn);
      }
      mysqli_close($conn);
}

//Function to check if table exist
function isTableExist($tableName){
      $conn = mysqli_connect(HOST, USER, PWD,'cg_db');
      $query = "SELECT * FROM $tableName";
      if(mysqli_query($conn, $query)) {
            return false;
      }
      else return true;

      mysqli_close($conn);
} 
?>

