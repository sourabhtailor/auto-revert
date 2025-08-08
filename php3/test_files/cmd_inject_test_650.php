<?php
// Command Injection test variation #650
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>