<?php
// Command Injection test variation #922
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>