<?php
// Command Injection test variation #903
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>