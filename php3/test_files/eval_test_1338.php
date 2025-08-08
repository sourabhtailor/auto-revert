<?php
// Eval injection test variation #1338
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>