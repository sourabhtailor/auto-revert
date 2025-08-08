<?php
// Command Injection test variation #1345
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>