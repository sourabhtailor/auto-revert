<?php
// Command Injection test variation #486
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>