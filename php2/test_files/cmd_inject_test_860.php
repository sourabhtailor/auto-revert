<?php
// Command Injection test variation #860
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>