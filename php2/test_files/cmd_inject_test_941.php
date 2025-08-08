<?php
// Command Injection test variation #941
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>