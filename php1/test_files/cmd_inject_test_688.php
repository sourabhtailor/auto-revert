<?php
// Command Injection test variation #688
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>