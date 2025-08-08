<?php
// Command Injection test variation #692
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>