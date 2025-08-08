<?php
// Eval injection test variation #1428
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>