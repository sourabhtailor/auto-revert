<?php
// Eval injection test variation #1418
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>