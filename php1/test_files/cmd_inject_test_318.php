<?php
// Command Injection test variation #318
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>