<?php
// Eval injection test variation #1294
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>