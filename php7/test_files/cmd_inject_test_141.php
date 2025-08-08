<?php
// Command Injection test variation #141
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>