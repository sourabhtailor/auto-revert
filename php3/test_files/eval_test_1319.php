<?php
// Eval injection test variation #1319
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>