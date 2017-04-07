
<?php 

header('Content_disposition: attachment;
	filename=breed.jpg');
header('Content-type: image/pjpeg');
readfile('breed.jpg');

 ?>