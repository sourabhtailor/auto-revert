<?php
// Eval injection test variation #310
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>