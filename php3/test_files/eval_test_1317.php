<?php
// Eval injection test variation #1317
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>