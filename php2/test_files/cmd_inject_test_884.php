<?php
// Command Injection test variation #884
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>