<?php 
  //including the database connection file
  include_once("../dbConnection/mysqlconfig_connection.php");

  //getting id from the url
  $id = $_GET['id'];
  
  //deleting the row from table
  //delete related syllabus records
  mysqli_query($dbc, "DELETE FROM tblsyllabus WHERE subject_id='$id'");

  //delete the subject
  mysqli_query($dbc, "DELETE FROM tblsubjects WHERE Subject_ID='$id'");

  //redirecting to the display page(index.php)
  header("Location: ../index.php");
?>