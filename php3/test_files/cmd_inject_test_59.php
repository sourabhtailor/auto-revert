<?php
// Command Injection test variation #59
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>