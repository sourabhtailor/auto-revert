<?php
// Command Injection test variation #305
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>