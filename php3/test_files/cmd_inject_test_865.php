<?php
// Command Injection test variation #865
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>