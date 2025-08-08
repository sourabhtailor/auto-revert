<?php
// Eval injection test variation #1385
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>