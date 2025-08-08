<?php
// Command Injection test variation #966
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>