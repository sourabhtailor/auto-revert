<?php
// Command Injection test variation #625
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>