<?php

// find the first number as the filename
$dirname = "messages/";
$dh = opendir($dirname);
if ($dh === false)	// create the directory in case it doesn't exist
{
	mkdir($dirname, 0775);
	$dh = opendir($dirname);
}
$mxnum = 0;
while (($file = readdir($dh)) !== false)
{
	$num = (int)substr($file, 0, strlen($file) - 4);
	if ($num > $mxnum)
	{
		$mxnum = $num;
	}
}
$filename = (string)($mxnum + 1);

// write the message to a file
$fh = fopen($dirname.$filename.".txt", "w");
fwrite($fh, $_POST["fname"]." ".$_POST["lname"]."\n");
fwrite($fh, $_POST["email"]."\n");
fwrite($fh, $_POST["title"]."\n");
fwrite($fh, $_POST["message"]."\n");
fclose($fh);

// show a success message
echo "Thanks dear ".$_POST["fname"].",<br>";
echo "your message has been received.<br>";

?>