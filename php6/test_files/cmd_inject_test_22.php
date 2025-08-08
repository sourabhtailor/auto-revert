<?php
// Command Injection test variation #22
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>