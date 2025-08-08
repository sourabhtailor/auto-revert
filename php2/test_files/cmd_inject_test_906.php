<?php
// Command Injection test variation #906
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>