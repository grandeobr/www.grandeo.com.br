<?
$my_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

echo $my_url;
//phpinfo();

echo "<br>Em construção";

?>
