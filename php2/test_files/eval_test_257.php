<?php
// Eval injection test variation #257
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>