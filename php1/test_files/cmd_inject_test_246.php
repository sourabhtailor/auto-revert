<?php
// Command Injection test variation #246
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>