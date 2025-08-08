<?php
// Command Injection test variation #275
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>