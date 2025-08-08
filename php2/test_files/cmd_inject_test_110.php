<?php
// Command Injection test variation #110
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>