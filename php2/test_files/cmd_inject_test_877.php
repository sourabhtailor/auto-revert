<?php
// Command Injection test variation #877
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>