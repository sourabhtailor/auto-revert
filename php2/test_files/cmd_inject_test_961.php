<?php
// Command Injection test variation #961
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>