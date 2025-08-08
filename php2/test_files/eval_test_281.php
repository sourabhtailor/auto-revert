<?php
// Eval injection test variation #281
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>