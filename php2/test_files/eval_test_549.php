<?php
// Eval injection test variation #549
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>