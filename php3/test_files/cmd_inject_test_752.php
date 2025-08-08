<?php
// Command Injection test variation #752
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>