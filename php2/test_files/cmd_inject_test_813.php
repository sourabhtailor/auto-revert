<?php
// Command Injection test variation #813
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>