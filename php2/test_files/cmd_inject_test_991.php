<?php
// Command Injection test variation #991
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>