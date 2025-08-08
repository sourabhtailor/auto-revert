<?php
// Command Injection test variation #595
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>