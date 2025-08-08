<?php
// Command Injection test variation #976
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>