<?php
// Command Injection test variation #786
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>