<?php
// Eval injection test variation #335
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>