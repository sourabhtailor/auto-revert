<?php
// Command Injection test variation #462
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>