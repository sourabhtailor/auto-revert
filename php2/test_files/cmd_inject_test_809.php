<?php
// Command Injection test variation #809
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>