<?php
// Eval injection test variation #673
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>