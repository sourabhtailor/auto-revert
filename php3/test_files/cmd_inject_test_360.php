<?php
// Command Injection test variation #360
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>