<?php
// Command Injection test variation #427
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>