<?php
// Command Injection test variation #316
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>