<?php
// Command Injection test variation #253
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>