<?php
// Command Injection test variation #226
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>