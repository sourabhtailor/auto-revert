<?php
// Command Injection test variation #310
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>