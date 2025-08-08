<?php
// Command Injection test variation #899
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>