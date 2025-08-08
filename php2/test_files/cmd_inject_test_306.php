<?php
// Command Injection test variation #306
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>