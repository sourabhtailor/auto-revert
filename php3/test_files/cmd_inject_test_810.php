<?php
// Command Injection test variation #810
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>