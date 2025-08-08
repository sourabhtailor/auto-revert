<?php
// Command Injection test variation #630
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>