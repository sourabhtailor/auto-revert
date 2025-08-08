<?php
// Command Injection test variation #566
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>