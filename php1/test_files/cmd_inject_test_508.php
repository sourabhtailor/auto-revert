<?php
// Command Injection test variation #508
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>