<?php
// Eval injection test variation #258
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>