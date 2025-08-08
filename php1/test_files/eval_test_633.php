<?php
// Eval injection test variation #633
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>