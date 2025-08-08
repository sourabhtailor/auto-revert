<?php
// Command Injection test variation #43
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>