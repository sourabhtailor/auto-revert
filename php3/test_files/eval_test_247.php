<?php
// Eval injection test variation #247
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>