<?php
// Command Injection test variation #880
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>