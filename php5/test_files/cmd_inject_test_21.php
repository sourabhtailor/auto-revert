<?php
// Command Injection test variation #21
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>