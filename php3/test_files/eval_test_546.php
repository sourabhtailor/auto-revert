<?php
// Eval injection test variation #546
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>