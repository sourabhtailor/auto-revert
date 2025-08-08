<?php
// Command Injection test variation #684
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>