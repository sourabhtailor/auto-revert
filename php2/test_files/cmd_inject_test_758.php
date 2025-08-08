<?php
// Command Injection test variation #758
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>