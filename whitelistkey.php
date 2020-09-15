<?php
$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$fh = fopen('logs.txt', 'a');
fwrite($fh, ''."".$ip ."\n");
$keys = array("zPYaUyqheZ","SrF5oGPv7Y", "eMIQeBuh4O", "3eTO5BNXPg", "gRZTaYZv7U");
$sub = $_GET["key"];
if (in_array($sub,$keys,TRUE)) {
echo "Whitelisted";
} else {
echo "Not Whitelisted";
}
?>