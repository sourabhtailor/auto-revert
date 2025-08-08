<?php
// Command Injection test variation #663
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>