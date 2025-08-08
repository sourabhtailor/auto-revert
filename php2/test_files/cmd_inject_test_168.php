<?php
// Command Injection test variation #168
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>