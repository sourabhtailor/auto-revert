<?php
// Command Injection test variation #613
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>