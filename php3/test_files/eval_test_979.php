<?php
// Eval injection test variation #979
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>