<?php
// Command Injection test variation #450
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>