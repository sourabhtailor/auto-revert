<?php
// Command Injection test variation #804
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>