
<?php 

header('Content_disposition: attachment;
	filename=aliennvasion.rar');
header('Content-type: application/x-rar-compressed');
readfile('aliennvasion.rar');

 ?>