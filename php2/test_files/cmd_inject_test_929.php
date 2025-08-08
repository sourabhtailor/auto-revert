<?php
// Command Injection test variation #929
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>