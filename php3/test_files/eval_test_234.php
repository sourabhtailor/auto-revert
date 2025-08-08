<?php
// Eval injection test variation #234
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>