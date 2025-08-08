<?php
// Command Injection test variation #464
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>