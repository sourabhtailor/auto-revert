<?php
// Command Injection test variation #683
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>