<?php
// Command Injection test variation #794
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>