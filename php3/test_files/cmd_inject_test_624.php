<?php
// Command Injection test variation #624
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>