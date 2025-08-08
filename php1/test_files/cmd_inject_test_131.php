<?php
// Command Injection test variation #131
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>