<?php
// Command Injection test variation #832
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>