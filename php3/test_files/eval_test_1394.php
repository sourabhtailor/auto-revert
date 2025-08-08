<?php
// Eval injection test variation #1394
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>