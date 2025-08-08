<?php
// Command Injection test variation #530
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>