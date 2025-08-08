<?php
// Command Injection test variation #346
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>