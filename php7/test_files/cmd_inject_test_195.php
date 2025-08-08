<?php
// Command Injection test variation #195
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>