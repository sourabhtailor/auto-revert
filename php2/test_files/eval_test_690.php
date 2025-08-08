<?php
// Eval injection test variation #690
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>