<?php
// Eval injection test variation #334
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>