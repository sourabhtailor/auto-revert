<?php
// Command Injection test variation #960
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>