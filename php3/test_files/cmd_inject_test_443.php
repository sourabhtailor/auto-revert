<?php
// Command Injection test variation #443
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>