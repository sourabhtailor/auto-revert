<?php
// Command Injection test variation #384
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>