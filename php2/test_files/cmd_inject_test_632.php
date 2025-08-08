<?php
// Command Injection test variation #632
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>