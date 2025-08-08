<?php
// Eval injection test variation #443
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>