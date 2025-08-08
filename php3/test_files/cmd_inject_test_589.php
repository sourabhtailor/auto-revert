<?php
// Command Injection test variation #589
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>