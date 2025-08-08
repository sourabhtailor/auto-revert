<?php
// Command Injection test variation #332
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>