<?php
// Command Injection test variation #669
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>