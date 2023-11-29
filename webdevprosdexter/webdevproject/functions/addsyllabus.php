<html>
  <head>
    <title>Add Syllabus</title>
  </head>
  <body>
    <?php 
      include_once("../dbConnection/mysqlconfig_connection.php");

      if(isset($_POST['Submit'])) {
        $syllabus_code = $_POST['syllabus_code'];
        $syllabus_author = $_POST['syllabus_author'];
        $subject_id = $_POST['subject_id'];


        if (empty($syllabus_code) || empty($syllabus_author)) {
          if(empty($syllabus_code)) {
            echo "<font color='red'>Syllabus Code field is empty</font><br/>";
          }
          if(empty($syllabus_author)) {
            echo "<font color='red'>Syllabus Author field is empty</font><br/>";
          }
          echo "<br/><a href='javascript:self.history.back();'>Go back</a>";
        }
        else {
          $result = mysqli_query($dbc, "INSERT INTO tblsyllabus(syllabus_code, syllabus_author, subject_id) VALUES('$syllabus_code', '$syllabus_author', '$subject_id')");
          echo "<font color='green'>Data added Succesfully</font>";
          echo "<br/><a href='../index.php'>View Result</a>";
        }
      }
    ?>
  </body>
</html>