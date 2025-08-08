<?php
// Command Injection test variation #951
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>