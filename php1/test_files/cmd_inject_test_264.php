<?php
// Command Injection test variation #264
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>