<?php

$message = '
			You have received a message from '.$name.'.<br><br>

			Email: '.$email.' <br><br>

			Subject: '.$subject.' <br><br>

			His message is as follows: <br><br>

			'.nl2br($message);
			;
echo "$message";
?>