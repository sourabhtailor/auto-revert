<?php
// Command Injection test variation #856
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>