<?php
// Command Injection test variation #639
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>