<?php
// Eval injection test variation #1351
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>