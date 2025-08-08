<?php
// Command Injection test variation #1037
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>