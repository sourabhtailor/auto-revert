<?php
// Command Injection test variation #380
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>