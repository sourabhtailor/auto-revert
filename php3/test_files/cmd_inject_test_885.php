<?php
// Command Injection test variation #885
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>