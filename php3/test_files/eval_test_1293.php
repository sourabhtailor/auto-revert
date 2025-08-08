<?php
// Eval injection test variation #1293
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>