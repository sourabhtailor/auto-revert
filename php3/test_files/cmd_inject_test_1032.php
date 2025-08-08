<?php
// Command Injection test variation #1032
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>