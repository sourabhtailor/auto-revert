<?php
// Command Injection test variation #97
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>