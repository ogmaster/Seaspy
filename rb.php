$imei = $_POST["imei"];
$momsn = $_POST["momsn"];
$transmit_time = $_POST["transmit_time"];
$iridium_latitude = $_POST["iridium_latitude"];
$iridium_longitude = $_POST["iridium_longitude"];
$iridium_cep = $_POST["iridium_cep"];
$data = $_POST["data"];
 
$decoded = pack('H*', $data);
 
echo "OK";

$myfile = fopen(“rockblock-data.txt”, “a”) or die(“Unable to open file!”);
fwrite($myfile, $transmit_time);
fwrite($myfile, ” “);
fwrite($myfile, $data);
fwrite($myfile, “\n”);
fclose($myfile);