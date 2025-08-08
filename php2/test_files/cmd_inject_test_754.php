<?php
// Command Injection test variation #754
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>