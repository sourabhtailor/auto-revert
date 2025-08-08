<?php
// Command Injection test variation #596
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>