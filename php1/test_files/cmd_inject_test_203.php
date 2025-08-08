<?php
// Command Injection test variation #203
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>