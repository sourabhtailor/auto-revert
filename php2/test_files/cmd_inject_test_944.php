<?php
// Command Injection test variation #944
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>