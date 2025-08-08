<?php
// Command Injection test variation #609
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>