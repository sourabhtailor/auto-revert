<?php
// Command Injection test variation #447
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>