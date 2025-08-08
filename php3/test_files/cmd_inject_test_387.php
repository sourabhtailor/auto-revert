<?php
// Command Injection test variation #387
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>