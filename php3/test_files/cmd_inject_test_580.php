<?php
// Command Injection test variation #580
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>