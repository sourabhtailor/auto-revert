<?php
// Command Injection test variation #621
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>