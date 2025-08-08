<?php
// Command Injection test variation #1355
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>