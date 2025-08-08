<?php
// Eval injection test variation #1427
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>