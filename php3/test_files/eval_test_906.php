<?php
// Eval injection test variation #906
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>