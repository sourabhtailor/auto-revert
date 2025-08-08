<?php
// Command Injection test variation #653
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>