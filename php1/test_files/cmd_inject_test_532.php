<?php
// Command Injection test variation #532
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>