<?php
// Command Injection test variation #25
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>