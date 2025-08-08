<?php
// Command Injection test variation #975
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>