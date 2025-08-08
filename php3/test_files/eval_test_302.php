<?php
// Eval injection test variation #302
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>