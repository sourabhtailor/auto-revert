<?php
// Command Injection test variation #373
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>