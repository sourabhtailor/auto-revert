<?php
// Command Injection test variation #26
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>