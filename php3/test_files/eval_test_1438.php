<?php
// Eval injection test variation #1438
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>