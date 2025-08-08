<?php
// Command Injection test variation #244
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>