<?php
// Command Injection test variation #876
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>