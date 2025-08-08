<?php
// Command Injection test variation #1389
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>