<?php
// Command Injection test variation #134
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>