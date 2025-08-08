<?php
// Command Injection test variation #679
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>