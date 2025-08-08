<?php
// Command Injection test variation #730
$user = $_GET['user'] ?? 'guest';
system("echo Welcome $user");
?>