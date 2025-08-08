<?php
// Command Injection test variation #847
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>