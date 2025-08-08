<?php
// Command Injection test variation #482
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>