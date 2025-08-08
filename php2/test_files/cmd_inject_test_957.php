<?php
// Command Injection test variation #957
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>