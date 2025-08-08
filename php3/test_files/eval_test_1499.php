<?php
// Eval injection test variation #1499
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>