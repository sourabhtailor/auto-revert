<?php
// Command Injection test variation #389
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>