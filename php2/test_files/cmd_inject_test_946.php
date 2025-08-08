<?php
// Command Injection test variation #946
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>