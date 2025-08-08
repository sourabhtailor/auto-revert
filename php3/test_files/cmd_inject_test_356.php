<?php
// Command Injection test variation #356
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>