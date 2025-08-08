<?php
// Command Injection test variation #776
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>