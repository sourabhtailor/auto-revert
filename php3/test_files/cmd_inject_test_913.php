<?php
// Command Injection test variation #913
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>