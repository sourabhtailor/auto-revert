<?php
// Command Injection test variation #678
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>