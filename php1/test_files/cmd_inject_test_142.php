<?php
// Command Injection test variation #142
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>