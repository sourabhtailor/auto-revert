<?php
// Eval injection test variation #763
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>