<?php
// Command Injection test variation #912
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>