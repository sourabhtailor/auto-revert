<?php
// Eval injection test variation #677
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>