<?php
// Command Injection test variation #709
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>