<?php
// Command Injection test variation #455
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>