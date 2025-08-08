<?php
// Command Injection test variation #1196
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>