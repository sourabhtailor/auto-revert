<?php
// Eval injection test variation #183
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>