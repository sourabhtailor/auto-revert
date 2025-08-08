<?php
// Command Injection test variation #353
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>