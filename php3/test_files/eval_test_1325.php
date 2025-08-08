<?php
// Eval injection test variation #1325
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>