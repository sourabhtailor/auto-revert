<?php
// Command Injection test variation #986
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>