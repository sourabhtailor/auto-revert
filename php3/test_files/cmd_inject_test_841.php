<?php
// Command Injection test variation #841
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>