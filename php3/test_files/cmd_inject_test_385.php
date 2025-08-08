<?php
// Command Injection test variation #385
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>