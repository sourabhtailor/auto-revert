<?php
// Eval injection test variation #367
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>