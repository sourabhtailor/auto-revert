<?php
// Eval injection test variation #453
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>