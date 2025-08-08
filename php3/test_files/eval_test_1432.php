<?php
// Eval injection test variation #1432
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>