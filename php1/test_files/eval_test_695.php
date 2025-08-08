<?php
// Eval injection test variation #695
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>