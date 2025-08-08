<?php
// Command Injection test variation #1063
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>