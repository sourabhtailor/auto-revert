<?php
// Eval injection test variation #1356
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>