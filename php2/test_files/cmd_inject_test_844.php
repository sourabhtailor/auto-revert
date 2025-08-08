<?php
// Command Injection test variation #844
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>