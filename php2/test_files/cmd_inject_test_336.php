<?php
// Command Injection test variation #336
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>