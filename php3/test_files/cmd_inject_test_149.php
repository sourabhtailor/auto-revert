<?php
// Command Injection test variation #149
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>