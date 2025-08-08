<?php
// Command Injection test variation #723
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>