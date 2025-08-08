<?php
// Command Injection test variation #798
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>