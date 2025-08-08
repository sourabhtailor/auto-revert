<?php
// Command Injection test variation #1223
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>