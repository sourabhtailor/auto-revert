<?php
// Eval injection test variation #193
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>