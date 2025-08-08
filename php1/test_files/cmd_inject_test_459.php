<?php
// Command Injection test variation #459
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>