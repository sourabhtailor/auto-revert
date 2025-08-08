<?php
// Eval injection test variation #293
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>