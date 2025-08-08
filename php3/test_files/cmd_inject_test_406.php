<?php
// Command Injection test variation #406
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>