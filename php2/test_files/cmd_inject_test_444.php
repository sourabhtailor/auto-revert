<?php
// Command Injection test variation #444
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>