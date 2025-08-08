<?php
// Command Injection test variation #937
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>