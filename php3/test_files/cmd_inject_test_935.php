<?php
// Command Injection test variation #935
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>