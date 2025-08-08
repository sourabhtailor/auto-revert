<?php
// Command Injection test variation #345
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>