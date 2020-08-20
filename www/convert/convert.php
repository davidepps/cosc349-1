<!DOCTYPE html>
<html>
<body>

<head><title>TimeConverter</title>

 <?php
if(isset($_POST['Convert'])) {
$zone = $_POST["timezone"];
switch($_REQUEST['timezone']) {
case 'Pacific/Niue':
$dt = new DateTime();
$niue_time = new DateTimeZone('Pacific/Niue');
$dt->setTimezone($niue_time);
echo "The time in Niue is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Pacific/Honolulu':
$dt = new DateTime();
$honolulu_time = new DateTimeZone('Pacific/Honolulu');
$dt->setTimezone($honolulu_time);
echo "The time in Honolulu Hawaii USA is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Pacific/Gambier':
$dt = new DateTime();
$gambier_time = new DateTimeZone('Pacific/Gambier');
$dt->setTimezone($gambier_time);
echo "The time in Gambier Islands is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Pacific/Pitcairn':
$dt = new DateTime();
$pitcairn_time = new DateTimeZone('Pacific/Pitcairn');
$dt->setTimezone($pitcairn_time);
echo "The time in Pitcairn Islands is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'America/Phoenix':
$dt = new DateTime();
$phoenix_time = new DateTimeZone('America/Phoenix');
$dt->setTimezone($phoenix_time);
echo "The time in Phoenix Arizona USA is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Pacific/Galapagos':
$dt = new DateTime();
$galapagos_time = new DateTimeZone('Pacific/Galapagos');
$dt->setTimezone($galapogas_time);
echo "The time in Galapagos Islands Ecuador is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'America/Chicago':
$dt = new DateTime();
$chicago_time = new DateTimeZone('America/Chicago');
$dt->setTimezone($chicago_time);
echo "The time in Chicago Illinois USA is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'America/New_York':
$dt = new DateTime();
$new_york_time = new DateTimeZone('America/New_York');
$dt->setTimezone($new_york_time);
echo "The time in New York City New York USA is: " . $dt->format('d-m-Y H:i:s A');
break;


case 'America/Argentina/Buenos_Aires':
$dt = new DateTime();
$buenos_aires_time = new DateTimeZone('America/Argentina/Buenos_Aires');
$dt->setTimezone($buenos_aires_time);
echo "The time in Buenos Aires Argentina is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Atlantic/South_Georgia':
$dt = new DateTime();
$south_georgia_time = new DateTimeZone('America/Argentina/Buenos_Aires');
$dt->setTimezone($south_georgia_time);
echo "The time in South Georgia is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Atlantic/Cape_Verde':
$dt = new DateTime();
$cape_verde_time = new DateTimeZone('Atlantic/Cape_Verde');
$dt->setTimezone($cape_verde_time);
echo "The time in Cape Verde is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Iceland':
$dt = new DateTime();
$iceland_time = new DateTimeZone('Iceland');
$dt->setTimezone($iceland_time);
echo "The time in Iceland is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Africa/Kinshasa':
$dt = new DateTime();
$kinshasa_time = new DateTimeZone('Africa/Kinshasa');
$dt->setTimezone($kinshasa_time);
echo "The time in Kinshasa Democratic Republic of Congo is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Africa/Johannesburg':
$dt = new DateTime();
$johannesburg_time = new DateTimeZone('Africa/Johannesburg');
$dt->setTimezone($johannesburg_time);
echo "The time in Johannesburg South Africa is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Asia/Baghdad':
$dt = new DateTime();
$baghdad_time = new DateTimeZone('Asia/Baghdad');
$dt->setTimezone($baghdad_time);
echo "The time in Baghdad Iraq is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Asia/Dubai':
$dt = new DateTime();
$dubai_time = new DateTimeZone('Asia/Dubai');
$dt->setTimezone($dubai_time);
echo "The time in Dubai United Arab Emirates is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Indian/Maldives':
$dt = new DateTime();
$maldives_time = new DateTimeZone('Indian/Maldives');
$dt->setTimezone($maldives_time);
echo "The time in Maldives is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Asia/Omsk':
$dt = new DateTime();
$omsk_time = new DateTimeZone('Asia/Omsk');
$dt->setTimezone($omsk_time);
echo "The time in Omsk Russia is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Asia/Krasnoyarsk':
$dt = new DateTime();
$krasnoyarsk_time = new DateTimeZone('Asia/Krasnoyarsk');
$dt->setTimezone($krasnoyarsk_time);
echo "The time in Krasnoyarsk Russia is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Australia/Perth':
$dt = new DateTime();
$perth_time = new DateTimeZone('Australia/Perth');
$dt->setTimezone($perth_time);
echo "The time in Perth Australia is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Asia/Tokyo':
$dt = new DateTime();
$tokyo_time = new DateTimeZone('Asia/Tokyo');
$dt->setTimezone($tokyo_time);
echo "The time in Tokyo Japan is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Pacific/Guam':
$dt = new DateTime();
$guam_time = new DateTimeZone('Pacific/Guam');
$dt->setTimezone($guam_time);
echo "The time in Guam is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Pacific/Noumea':
$dt = new DateTime();
$noumea_time = new DateTimeZone('Pacific/Noumea');
$dt->setTimezone($noumea_time);
echo "The time in Noumea New Caledonia France is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Pacific/Auckland':
$dt = new DateTime();
$auckland_time = new DateTimeZone('Pacific/Auckland');
$dt->setTimezone($auckland_time);
echo "The time in Auckland New Zealand is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Pacific/Apia':
$dt = new DateTime();
$apia_time = new DateTimeZone('Pacific/Apia');
$dt->setTimezone($apia_time);
echo "The time in Apia Samoa is: " . $dt->format('d-m-Y H:i:s A');
break;

case 'Pacific/Kiritimati':
$dt = new DateTime();
$kiritimati_time = new DateTimeZone('Pacific/Kiritimati');
$dt->setTimezone($kiritimati_time);
echo "The time in Kiritimati Republic of Kiribati is: " . $dt->format('d-m-Y H:i:s A');
break;

}
}

?>

<form method="post" action="http://192.168.2.11/index.php">
<button name = "Back"type= "submit">Back</button>
</form>

</body>
</html>

