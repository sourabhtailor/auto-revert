<?php
// Command Injection test variation #799
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>