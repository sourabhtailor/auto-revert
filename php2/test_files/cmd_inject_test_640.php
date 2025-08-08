<?php
// Command Injection test variation #640
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>