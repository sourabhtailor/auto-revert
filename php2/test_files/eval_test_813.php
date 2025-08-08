<?php
// Eval injection test variation #813
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>