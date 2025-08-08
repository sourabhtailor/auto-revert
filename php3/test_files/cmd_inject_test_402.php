<?php
// Command Injection test variation #402
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>