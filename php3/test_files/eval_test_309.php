<?php
// Eval injection test variation #309
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>