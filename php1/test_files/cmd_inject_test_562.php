<?php
// Command Injection test variation #562
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>