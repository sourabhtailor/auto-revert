<?php
// Command Injection test variation #733
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>