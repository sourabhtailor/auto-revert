<?php
// Eval injection test variation #356
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>