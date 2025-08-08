<?php
// Command Injection test variation #977
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>