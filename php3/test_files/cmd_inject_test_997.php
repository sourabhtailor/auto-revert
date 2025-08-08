<?php
// Command Injection test variation #997
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>