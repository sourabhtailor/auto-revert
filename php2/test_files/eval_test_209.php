<?php
// Eval injection test variation #209
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>