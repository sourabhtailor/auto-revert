<?php
// Command Injection test variation #370
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>