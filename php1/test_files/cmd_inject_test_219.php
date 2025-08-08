<?php
// Command Injection test variation #219
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>