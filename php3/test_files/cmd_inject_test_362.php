<?php
// Command Injection test variation #362
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>