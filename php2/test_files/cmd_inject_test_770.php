<?php
// Command Injection test variation #770
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>