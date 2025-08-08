<?php
// Command Injection test variation #658
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>