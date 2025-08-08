<?php
// Command Injection test variation #914
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>