<?php
// Command Injection test variation #568
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>