<?php
// Command Injection test variation #783
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>