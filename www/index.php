<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>Timezone Converter</title>
<style>
th { text-align: left; }

table, th, td {
  border: 2px solid grey;
  border-collapse: collapse;
}

th, td {
  padding: 0.2em;
}
</style>
</head>

<body>

<p>You can convert to the following timezones:</p>

<table border="1">
<tr><th>Timezone IDs</th><th>Timezone Offset</th></tr>

<?php
 session_start();


$db_host   = '192.168.2.12';
$db_name   = 'timezones';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$pdo = new PDO($pdo_dsn, $db_user, $db_passwd);

$q = $pdo->query("SELECT * FROM timezones");

while($row = $q->fetch()){
  echo "<tr><td>".$row["name"]."</td><td>".$row["offset"]."</td></tr>\n";
}



?>
</table>


<form method="post" action="http://192.168.2.13/convert.php">
<label for="timezones"> Choose a timezone to convert</label>
<select name="timezone">
<option value="Pacific/Niue">Pacific/Niue</option>
<option value="Pacific/Honolulu">Pacific/Honolulu</option>
<option value="Pacific/Gambier">Pacific/Gambier</option>
<option value="Pacific/Pitcairn">Pacific/Pitcairn</option>
<option value="America/Phoenix">America/Phoenix</option>
<option value="Pacific/Galapagos">Pacific/Galapagos</option>
<option value="America/Chicago">America/Chicago</option>
<option value="America/New_York">America/New_York</option>
<option value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option>
<option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option>
<option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
<option value="Iceland">Iceland</option>
<option value="Africa/Kinshasa">Africa/Kinshasa</option>
<option value="Africa/Johannesburg">Africa/Johannesburg</option>
<option value="Asia/Baghdad">Asia/Baghdad</option>
<option value="Asia/Dubai">Asia/Dubai</option>
<option value="Indian/Maldives">Indian/Maldives</option>
<option value="Asia/Omsk">Asia/Omsk</option>
<option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
<option value="Australia/Perth">Australia/Perth</option>
<option value="Asia/Tokyo">Asia/Tokyo</option>
<option value="Pacific/Guam">Pacific/Guam</option>
<option value="Pacific/Noumea">Pacific/Noumea</option>
<option value="Pacific/Auckland">Pacific/Auckland</option>
<option value="Pacific/Apia">Pacific/Apia</option>
<option value="Pacific/Kiritimati">Pacific/Kiritimati</option>
</select>
<input type="submit" value="Convert" name="Convert">


</form>




</body>
</html>


