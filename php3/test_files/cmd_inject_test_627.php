<?php
// Command Injection test variation #627
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>