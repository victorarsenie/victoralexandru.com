<?php 

header('Content_disposition: attachment;
	filename=cv.docx');
header('Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
readfile('cv.docx');

 ?>