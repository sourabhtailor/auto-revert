<?php
// Eval injection test variation #957
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>