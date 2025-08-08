<?php
// Eval injection test variation #1374
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>