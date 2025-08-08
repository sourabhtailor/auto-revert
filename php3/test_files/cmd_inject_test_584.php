<?php
// Command Injection test variation #584
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>