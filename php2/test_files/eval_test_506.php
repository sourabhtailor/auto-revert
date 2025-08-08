<?php
// Eval injection test variation #506
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>