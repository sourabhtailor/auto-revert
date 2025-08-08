<?php
// Eval injection test variation #391
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>