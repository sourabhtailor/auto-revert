<?php
// Eval injection test variation #949
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>