<?php
// Command Injection test variation #979
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>