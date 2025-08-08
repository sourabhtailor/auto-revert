<?php
// Command Injection test variation #900
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>