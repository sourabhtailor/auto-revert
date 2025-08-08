<?php
// Eval injection test variation #1276
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>