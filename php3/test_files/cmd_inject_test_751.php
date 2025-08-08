<?php
// Command Injection test variation #751
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>