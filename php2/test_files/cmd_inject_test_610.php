<?php
// Command Injection test variation #610
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>