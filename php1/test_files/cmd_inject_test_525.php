<?php
// Command Injection test variation #525
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>