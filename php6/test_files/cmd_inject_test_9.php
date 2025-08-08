<?php
// Command Injection test variation #9
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>