<?php
// Command Injection test variation #453
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>