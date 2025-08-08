<?php
// Command Injection test variation #234
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>