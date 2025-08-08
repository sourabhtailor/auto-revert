<?php
// Command Injection test variation #501
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>