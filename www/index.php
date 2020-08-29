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

        <form method=post action="http://192.168.2.13/convert.php">
            <label for="timezones"> Choose a timezone to convert</label>
            <select name="timezone">
<?php
    $q = $pdo->query("SELECT * FROM timezones");
    while($row = $q->fetch()){                                                 
       echo "<option value='".$row['name']."'>".$row['name']."</option>";
    }
?>
            </select>
            <input type="submit" value="Convert" name="Convert">
        </form>


    </body>
</html>


