<?php
// Command Injection test variation #1474
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>