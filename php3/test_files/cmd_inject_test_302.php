<?php
// Command Injection test variation #302
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>