<?php
// Eval injection test variation #336
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>