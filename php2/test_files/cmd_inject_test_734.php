<?php
// Command Injection test variation #734
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>