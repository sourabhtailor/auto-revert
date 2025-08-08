<?php
// Command Injection test variation #743
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>