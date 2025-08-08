<?php
// Eval injection test variation #1362
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>