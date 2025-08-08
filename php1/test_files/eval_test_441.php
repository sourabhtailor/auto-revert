<?php
// Eval injection test variation #441
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>