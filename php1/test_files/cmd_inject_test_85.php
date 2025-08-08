<?php
// Command Injection test variation #85
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>