<?php
// Command Injection test variation #1445
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>