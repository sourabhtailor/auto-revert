<?php
// Command Injection test variation #369
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>