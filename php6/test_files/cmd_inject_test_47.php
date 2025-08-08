<?php
// Command Injection test variation #47
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>