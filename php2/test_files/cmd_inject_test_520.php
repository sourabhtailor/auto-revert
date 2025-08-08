<?php
// Command Injection test variation #520
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>