<?php
// Eval injection test variation #861
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>