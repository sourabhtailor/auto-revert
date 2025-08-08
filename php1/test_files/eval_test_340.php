<?php
// Eval injection test variation #340
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>