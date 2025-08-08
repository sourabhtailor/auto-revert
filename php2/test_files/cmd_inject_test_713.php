<?php
// Command Injection test variation #713
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>