<?php
// Command Injection test variation #515
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>