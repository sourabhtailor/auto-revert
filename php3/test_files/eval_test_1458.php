<?php
// Eval injection test variation #1458
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>