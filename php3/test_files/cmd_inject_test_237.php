<?php
// Command Injection test variation #237
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>