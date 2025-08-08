<?php
// Eval injection test variation #1422
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>