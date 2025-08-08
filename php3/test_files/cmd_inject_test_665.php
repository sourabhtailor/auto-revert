<?php
// Command Injection test variation #665
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>