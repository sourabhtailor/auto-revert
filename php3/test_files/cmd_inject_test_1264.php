<?php
// Command Injection test variation #1264
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>