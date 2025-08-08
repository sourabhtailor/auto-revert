<?php
// Eval injection test variation #1126
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>