<?php
// Command Injection test variation #1469
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>