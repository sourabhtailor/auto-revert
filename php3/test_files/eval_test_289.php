<?php
// Eval injection test variation #289
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>