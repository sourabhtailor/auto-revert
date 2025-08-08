<?php
// Eval injection test variation #332
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>