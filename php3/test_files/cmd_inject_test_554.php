<?php
// Command Injection test variation #554
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>