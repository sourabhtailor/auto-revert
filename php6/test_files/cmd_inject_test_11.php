<?php
// Command Injection test variation #11
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>