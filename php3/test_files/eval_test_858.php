<?php
// Eval injection test variation #858
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>