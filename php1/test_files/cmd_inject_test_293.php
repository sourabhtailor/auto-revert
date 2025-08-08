<?php
// Command Injection test variation #293
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>