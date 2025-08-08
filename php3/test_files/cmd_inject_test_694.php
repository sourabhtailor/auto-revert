<?php
// Command Injection test variation #694
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>