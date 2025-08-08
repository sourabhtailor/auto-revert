<?php
// Eval injection test variation #714
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>