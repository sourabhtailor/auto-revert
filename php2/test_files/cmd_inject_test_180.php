<?php
// Command Injection test variation #180
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>