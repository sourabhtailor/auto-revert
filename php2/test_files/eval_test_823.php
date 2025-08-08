<?php
// Eval injection test variation #823
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>