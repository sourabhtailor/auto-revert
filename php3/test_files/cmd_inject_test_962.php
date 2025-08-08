<?php
// Command Injection test variation #962
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>