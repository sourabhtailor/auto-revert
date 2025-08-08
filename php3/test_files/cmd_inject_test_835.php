<?php
// Command Injection test variation #835
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>