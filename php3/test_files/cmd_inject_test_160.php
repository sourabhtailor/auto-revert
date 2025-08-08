<?php
// Command Injection test variation #160
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>