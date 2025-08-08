<?php
// Command Injection test variation #12
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>