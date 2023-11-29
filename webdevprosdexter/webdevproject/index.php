<?php 
  //include the database file
  include_once("dbConnection/mysqlconfig_connection.php");
  //fetch file
  include_once("functions/fetch.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample CRUD</title>
</head>
<body>
  <h1>My Subjects</h1>
  <div class="pages" style="display: flex; gap: 1rem;">
    <a href="forms/addform.php">Add Subject</a><br><br>
    <a href="forms/addsyllabusform.php">Add Syllabus</a><br><br>
  </div>
  <table width='100%' border=1>
    <tr bgcolor='#CCCCCC'>
      <td>ID</td>
      <td>Subject Code</td>
      <td>Subject Name</td>
      <td>Syllabus ID</td>
      <td>Syllabus Code</td>
      <td>Syllabus Author</td>
      <td>Action</td>
    </tr>

    

    <?php 
      while ($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$res['Subject_ID']."</td>";
        echo "<td>".$res['Subject_Code']."</td>";
        echo "<td>".$res['Subject_Name']."</td>";
        echo "<td>".$res['syllabus_id']."</td>";
        echo "<td>".$res['syllabus_code']."</td>";
        echo "<td>".$res['syllabus_author']."</td>";
        echo "<td><a href=\"forms/editform.php?id=$res[Subject_ID]\">Edit</a> |
                  <a href=\"functions/delete.php?id=$res[Subject_ID]\"
                  onclick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>