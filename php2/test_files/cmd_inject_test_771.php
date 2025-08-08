<?php
// Command Injection test variation #771
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>