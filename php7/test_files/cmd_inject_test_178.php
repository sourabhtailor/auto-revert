<?php
// Command Injection test variation #178
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>