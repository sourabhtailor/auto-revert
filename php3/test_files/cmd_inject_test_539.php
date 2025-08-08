<?php
// Command Injection test variation #539
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>