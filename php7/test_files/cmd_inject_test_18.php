<?php
// Command Injection test variation #18
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>