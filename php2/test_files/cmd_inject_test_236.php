<?php
// Command Injection test variation #236
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>