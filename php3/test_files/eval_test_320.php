<?php
// Eval injection test variation #320
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>