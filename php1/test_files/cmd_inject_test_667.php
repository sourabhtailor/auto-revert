<?php
// Command Injection test variation #667
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>