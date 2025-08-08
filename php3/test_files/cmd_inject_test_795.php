<?php
// Command Injection test variation #795
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>