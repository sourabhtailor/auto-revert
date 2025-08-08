<?php
// Command Injection test variation #430
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>