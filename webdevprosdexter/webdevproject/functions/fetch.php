<?php 
  //fetching data
  $query = "SELECT * FROM tblsubjects LEFT JOIN tblsyllabus ON tblsyllabus.subject_id = tblsubjects.Subject_ID;";
  //using mysqli_query
  $result = mysqli_query($dbc, $query); //using mysql_query
?>