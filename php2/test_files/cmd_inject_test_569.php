<?php
// Command Injection test variation #569
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>