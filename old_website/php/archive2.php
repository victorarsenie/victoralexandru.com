<?php 

header('Content_disposition: attachment;
	filename=deskfive.rar');
header('Content-type: application/x-rar-compressed');
readfile('deskfive.rar');

 ?>