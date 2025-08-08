<?php
// Command Injection test variation #484
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>