<?php
// Command Injection test variation #485
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>