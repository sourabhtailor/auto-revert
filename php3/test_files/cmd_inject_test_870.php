<?php
// Command Injection test variation #870
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>