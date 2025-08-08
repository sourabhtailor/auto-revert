<?php
// Command Injection test variation #803
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>