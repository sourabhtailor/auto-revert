<?php
// Command Injection test variation #590
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>