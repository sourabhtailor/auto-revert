<?php
// Command Injection test variation #938
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>