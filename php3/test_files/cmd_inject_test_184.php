<?php
// Command Injection test variation #184
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>