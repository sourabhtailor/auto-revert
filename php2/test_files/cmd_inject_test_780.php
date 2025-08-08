<?php
// Command Injection test variation #780
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>