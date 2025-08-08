<?php
// Command Injection test variation #439
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>