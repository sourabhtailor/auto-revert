<?php
// Command Injection test variation #643
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>