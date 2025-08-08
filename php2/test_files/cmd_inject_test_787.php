<?php
// Command Injection test variation #787
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>