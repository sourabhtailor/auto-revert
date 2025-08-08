<?php
// Command Injection test variation #507
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>