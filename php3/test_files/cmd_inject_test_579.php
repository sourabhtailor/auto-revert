<?php
// Command Injection test variation #579
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>