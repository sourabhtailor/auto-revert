<?php
// Command Injection test variation #432
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>