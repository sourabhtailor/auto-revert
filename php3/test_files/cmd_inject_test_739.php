<?php
// Command Injection test variation #739
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>