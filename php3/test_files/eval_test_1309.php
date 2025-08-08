<?php
// Eval injection test variation #1309
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>