<?php
// Eval injection test variation #432
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>