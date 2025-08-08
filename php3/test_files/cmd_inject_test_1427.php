<?php
// Command Injection test variation #1427
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>