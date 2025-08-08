<?php
// Eval injection test variation #266
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>