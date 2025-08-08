<?php
// Command Injection test variation #949
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>