<?php
// Command Injection test variation #673
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>