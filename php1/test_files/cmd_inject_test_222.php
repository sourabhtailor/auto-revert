<?php
// Command Injection test variation #222
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>