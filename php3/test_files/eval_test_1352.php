<?php
// Eval injection test variation #1352
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>