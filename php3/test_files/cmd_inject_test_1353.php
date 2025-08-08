<?php
// Command Injection test variation #1353
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>