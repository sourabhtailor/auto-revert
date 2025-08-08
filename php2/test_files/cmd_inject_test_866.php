<?php
// Command Injection test variation #866
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>