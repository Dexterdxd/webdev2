<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Data</title>
</head>
<body>
  <?php 
    //including the database connection file
    include_once("../dbConnection/mysqlconfig_connection.php");

    if(isset($_POST['submit'])) {
      $code = $_POST['code'];
      $name = $_POST['name'];

      //checking if empty fields
      if(empty($code) || empty($name)) {
        if(empty($code)) {
          echo "<font color = 'red'> object code field is empty.</font><br>";
        }
        if(empty($name)) {
          echo "<font color = 'red'> object code field is empty.</font><br>";
        }

        //link to the previous page
        echo "<br><a href='javascript:self.history.back();'>Go Back</a>";
      }
      else {
        //if all the fields are filled (not empty)
        //insert data to database
        $result = mysqli_query($dbc, "INSERT INTO tblsubjects(Subject_Code, Subject_Name) VALUES('$code', '$name')");
        
        //display success message
        echo "<font color='green'>Data added succesfully.";
        echo "<br><a href='../index.php'>View Result</a>";
      }
    }
  ?>
</body>
</html>