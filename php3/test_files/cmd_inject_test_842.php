<?php
// Command Injection test variation #842
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>