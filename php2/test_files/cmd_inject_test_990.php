<?php
// Command Injection test variation #990
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>