<?php
// Command Injection test variation #496
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>