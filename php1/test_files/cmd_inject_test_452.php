<?php
// Command Injection test variation #452
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>