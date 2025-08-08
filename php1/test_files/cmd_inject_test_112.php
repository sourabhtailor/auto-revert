<?php
// Command Injection test variation #112
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>