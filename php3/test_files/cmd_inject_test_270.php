<?php
// Command Injection test variation #270
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>