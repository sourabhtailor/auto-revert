<?php
// Eval injection test variation #1105
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>