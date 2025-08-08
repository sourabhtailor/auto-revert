<?php
// Command Injection test variation #175
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>