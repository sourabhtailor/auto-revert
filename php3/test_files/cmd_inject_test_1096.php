<?php
// Command Injection test variation #1096
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>