<?php
// Command Injection test variation #259
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>