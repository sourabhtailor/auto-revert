<?php
// Eval injection test variation #1449
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>