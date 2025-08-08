<?php
// Eval injection test variation #116
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>