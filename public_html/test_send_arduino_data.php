<?php
$writefile=fopen("test_command_file.txt","a")or die("Unable to open file!");
fwrite($writefile,"Hello");
$command=$_REQUEST['command']or die("unable to init post");
fwrite($writefile,$command);
header("location: testindex.php")
?>