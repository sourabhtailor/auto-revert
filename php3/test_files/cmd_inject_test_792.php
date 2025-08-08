<?php
// Command Injection test variation #792
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>