<?php
$mysqli = new mysqli("localhost","root","", "myadsl_gym2");
$mysqli->query("SET NAMES utf8");
$data = $mysqli -> query("SELECT * FROM instructor")

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Yoda_NewCourse</title>
</head>


<body>
 
 <!-- Input form -->
<form action="<?PHP echo $_SERVER['SCRIPT_NAME'] ?>" method="POST">
  <table border="0">
    <tr>
      <td>Name</td>
      <td>Address</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="Name" maxlength="45" size="30" />
      </td>
      <td>
        <input type="text" name="Address" maxlength="90" size="60" />
      </td>
      <td>
        <input type="submit" value="Add Data" />
      </td>
    </tr>
  </table>
</form>

<!-- Display table data. -->
<table border="1" cellpadding="2" cellspacing="2">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Address</td>
  </tr>

 
</body>
</html>
