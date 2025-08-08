<?php
// Command Injection test variation #918
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>