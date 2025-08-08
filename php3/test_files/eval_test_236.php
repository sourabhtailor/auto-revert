<?php
// Eval injection test variation #236
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>