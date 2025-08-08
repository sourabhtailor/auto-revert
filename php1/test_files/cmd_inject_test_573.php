<?php
// Command Injection test variation #573
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>