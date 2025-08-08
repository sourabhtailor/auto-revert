<?php
// Command Injection test variation #1038
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>