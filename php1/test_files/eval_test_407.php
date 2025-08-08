<?php
// Eval injection test variation #407
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>