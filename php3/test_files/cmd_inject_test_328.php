<?php
// Command Injection test variation #328
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>