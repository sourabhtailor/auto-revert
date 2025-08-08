<?php
// Command Injection test variation #347
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>