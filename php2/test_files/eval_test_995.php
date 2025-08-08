<?php
// Eval injection test variation #995
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>