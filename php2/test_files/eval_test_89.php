<?php
// Eval injection test variation #89
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>