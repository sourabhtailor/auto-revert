<?php
// Eval injection test variation #162
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>