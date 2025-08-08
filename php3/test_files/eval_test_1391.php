<?php
// Eval injection test variation #1391
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>