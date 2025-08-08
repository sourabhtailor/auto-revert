<?php
// Eval injection test variation #738
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>