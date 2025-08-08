<?php
// Command Injection test variation #633
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>