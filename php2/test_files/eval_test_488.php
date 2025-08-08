<?php
// Eval injection test variation #488
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>